<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Toastr;
use Stripe\Checkout\Session;
use Stripe\Customer;
use Stripe\Event;
use Stripe\Exception\ApiErrorException;
use Auth;
class PaymentController extends Controller
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
        $this->countries =$countries->orderBy('country_name','asc')->get();
       
    }
    public function index() {
        $response['countries'] = $this->countries ;
        return view('payment', $response);
    }
    
    public function success(Request $request) {
 $user = Auth::user();
        $response['countries'] = $this->countries ;
        $user->subscriptions()->sync([$request->sid]);
                
        $this->toastr->success("You have subscribed successfully!");
        return redirect()->route("user.subscription");
        return view('success', $response);
   
    }
      public function cancel() {

        return redirect()->route('pricing');
    }
 }
