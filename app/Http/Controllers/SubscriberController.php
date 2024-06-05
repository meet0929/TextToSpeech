<?php

namespace App\Http\Controllers;

use App\Helper\Helpers;
use App\Mail\Websitemail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Toastr;

class SubscriberController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $toastr;

    public function __construct(Toastr $toastr)
    {
        $this->toastr = $toastr;
      //  $this->middleware('auth');
    }
    public function subscriber_form()
    {
        return view('subscribe_form');
    }

    public function index(Request $request)
    {
            try {
                //code...
            
            $validated = $request->validate([
                'email' => 'required|email|unique:subscribers|max:30'
            ]);

            $token = hash('sha256', time());
            $subscriber = new Subscriber();
            $subscriber->email = $request->email;
            $subscriber->token = $token;
            $subscriber->status = 'Pending';
            // $subscriber->save();

            $subscriber->save() ? 'You have successfully subscribed.' : 'Something went wrong, please try again.';

            // Send email
            $subject = 'Please Comfirm Subscription';
            $verification_link = url('subscriber/verify/'.$token.'/'.$request->email);
            $message = 'Please click on the following link in order to verify as subscriber:<br><br>';
            
            // $message .= $verification_link;

            $message .= '<a href="'.$verification_link.'">';
            $message .= $verification_link;
            $message .= '</a><br><br>';
            $message .= 'If you received this email by mistake, simply delete it. You will not be subscribed if you do not  click the confirmation link above.';

            \Mail::to($request->email)->send(new Websitemail($subject,$message));
            $this->toastr->success(
                "Thanks, please check your inbox to confirm subscription"
            );
            return redirect()->back()->with('success', 'Thanks, please check your inbox to confirm subscription');
        } catch (\Throwable $th) {
            //throw $th;
            $this->toastr->error(
                "Something went wrong"
            );
            return redirect()->back();
        }
      
    }

    public function verify($token,$email)
    {

        // Helpers::read_json();
        
        $subscriber_data = Subscriber::where('token',$token)->where('email',$email)->first();
        if($subscriber_data) 

        
        {
            $subscriber_data->token = '';
            $subscriber_data->status = 'Active';
            $subscriber_data->update();

            return redirect()->back()->with('success', 'You are successfully verified as a subscribe to this system');
        } 
        else 
        {
            return redirect()->route('form');
        }
    }
}