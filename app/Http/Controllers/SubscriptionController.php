<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\User;
use App\Models\Country;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Toastr;
use Auth;
use Stripe\Price;
use Stripe\Product;
use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\WebhookEndpoint;

use Illuminate\Support\Facades\Mail;
use App\Mail\CancelSubscriptionMail;

class SubscriptionController extends Controller
{
    protected $toster;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $countries;
    protected $toastr;
    public function __construct(Toastr $toastr, Country $countries)
    {
        $this->toastr = $toastr;
        $this->countries = $countries->orderBy("country_name", "asc")->get();
        $this->stripe = new StripeClient([
            "api_key" => env("STRIPE_SECRET")
        ]);
      //  $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        
        $response["countries"] = $this->countries;
        if (!$user->subscriptions->isNotEmpty()) {
            return redirect("pricing");
        }

        return view("subscription", $response);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
        try {
            // Create a charge
        if (Auth::check()) { 
            $user = Auth::user();
 
                $subscriptionDetail = Subscription::findOrFail($request->subscription_id);
                if ($user->subscriptions->isNotEmpty() && !$request->upgrade) {    
                    $this->toastr->warning(
                        "You already subscribed with this package. Click on to 'Upgrade Plan' if you want another one"
                    );
                    return redirect()->route("user.subscription");
                } else if ($subscriptionDetail->price == "0") {  

                    $user
                        ->subscriptions()
                        ->sync([$subscriptionDetail->id]);
                
                    $this->toastr->success("You have subscribed successfully!");
                    return redirect()->route("user.subscription");
                } else { 
                    //  $this->toastr->warning("Redirect to payment gateway");
                    \Stripe\Stripe::setApiKey(env("STRIPE_SECRET"));

                    $order = Order::create([
                        "user_id" => $user->id,
                        "subscription_id" => $subscriptionDetail->id,
                        'status' => 'incomplete',
                    ]);
                        $product = $this->stripe->products->create([
                            'name' => $subscriptionDetail->name
                        ]);
                         $pricedata = [
                            'currency' => 'USD',
                            'product' => $product->id,
                            'unit_amount' => $subscriptionDetail->price,
                        ];
                   
                       $price = $this->stripe->prices->create($pricedata);
                        $customer = $this->stripe->customers->create([
                            'email' => $user->email,
                            'description' => 'My '.$user->id.'subscription',
                        ]);
                        $checkout_session = \Stripe\Checkout\Session::create([
                            "success_url" =>
                                route("payment.success") .
                                "?session_id={CHECKOUT_SESSION_ID}&sid=".$subscriptionDetail->id,
                            "cancel_url" => route("payment.cancel"),
                            'payment_method_types' => ['card'],
                            'payment_method_options' => [
                                'wechat_pay' => [
                                    'client' => "web"
                                ],
                            ],
                            'mode' => 'payment',
                            'line_items' => [[
                                'price' => $price,
                                'quantity' => 1
                            ]],
                            'customer' => $customer->id,
                             'metadata' => [
                                'userid' => $user->id,
                                'username' => $user->email,
                                'firstname' => $user->name,
                                'lastname' => $user->name,
                                'component' => 'Subscription',
                               
                            ],
                             'customer_update' => [
                                'address' => 'auto',
                            ],                            
                            
                        ]);

                        return redirect($checkout_session->url);
                    
                }
            } else { 
                $this->toastr->warning(
                    "You have to register or login first to subscribed youself in this package!"
                );
                return redirect()->route("register");
            }
        } catch (CardException $e) {
         
            // Charge failed
            return response()->json([
                "success" => false,
                "message" => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        //
    }

    public function cancelSubscription(Request $request) {
        // Define your validation rules
        $rules = [
            'cmbreason' => 'required|string|max:255',
            'reasonDescription' => 'required|string|min:10|max:255',
            
        ];

        // Define your custom messages
        $messages = [
            'cmbreason.required' => 'Please select reason.',
            'cmbreason.max' => 'The reason may not be greater than 255 characters.',
            'reasonDescription.required' => 'Please specify in short!',
            'reasonDescription.min' => 'Specify must be at least 10 characters.',
            'reasonDescription.max' => 'Specify reason may not be greater than 255 characters.',
        ];

        // Perform validation
        $request->validate($rules, $messages);

        // $request->validate([
        //     'cmbreason' => 'required|string|max:255',
        //     'reasonDescription' => 'required|string|min:10|max:255',       
        // ]);

        $user = Auth::user();
        $subscriptions = $user->subscriptions();
        
        if ($subscriptions) {
            //$subscription->cancel();
            $reasonArray = array(
                '1'=> "It's too expensive/I found a more affordable alternative.",
                '2'=> "I'm not using it enough to justify the cost.",
                '3'=> "I'm experiencing technical issues/performance problems.",
                '4'=> "The quality doesn't meet my expectations.",
                '5'=> "I'm not satisfied with customer support.",
                '6'=> "My needs have changed/I no longer need the service.",
                '7'=> "I've found another service that better fits my needs.",
                '8'=> "Other reasons"
            );

            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'subject' => $reasonArray[$request->cmbreason],
                'message' => $request->reasonDescription,
            ];

            $toEmail = env('ADMIN_MAIL');
            //$toEmail = 'pm@rankbooster.net';
            try {
                Mail::to($toEmail)->send(new CancelSubscriptionMail($data));
                Auth::logout();
                return response()->json(['message' => 'Subscription cancellation request sent successfully']);
            } catch (Exception $e) {
                $this->toastr->error("Sorry! Please try again later!");
                return response()->json(['error' => 'Sorry! Please try again later!']);
            }
        }
        
        return response()->json(['error' => 'No active subscription found'], 401);
    }
}
