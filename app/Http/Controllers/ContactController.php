<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use App\Toastr;
use App\Models\ContactUs;

class ContactController extends Controller
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
    public function store(Request $request)
    {
         
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            ];

            ContactUs::create($data);
            
            $toEmail = env('ADMIN_MAIL');
            
            //$toEmail = 'support@texttospeech.ai';
            //$toEmail = 'pm@rankbooster.net';
           
            try {
                Mail::to($toEmail)->send(new ContactFormMail($data));
                $this->toastr->success("Your message has been sent successfully!");
                return redirect()->back()->with('success', 'Your message has been sent successfully!');
            } catch (Exception $e) {
    
                $this->toastr->error("Sorry! Please try again later!");
                return redirect()->back()->with('error', 'Sorry! Please try again later!');
            }
        
           //code...
        } catch (\Throwable $th) {
            //throw $th;
            //  $this->toastr->error("Something went Wrong!");
            //return redirect()->back()->with('success', 'Your message has been sent successfully!');
            $this->toastr->error("Something went Wrong!");
            return redirect()->back()->with('error', 'Something went Wrong!');
        }
    }

    public function sendEmail(Request $request)
    {
         
        $data = [
            'name' => 'Test Name',
            'email' => 'test.mail@gmail.com',
            'subject' => 'Get in touch',
            'message' => 'Test Message',
        ];

        //$toEmail = env('ADMIN_MAIL');
        $toEmail = 'pm@rankbooster.net';
       
        try {
            Mail::to($toEmail)->send(new ContactFormMail($data));
            dd('Test');
            $this->toastr->success("Your message has been sent successfully!");
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            dd($e);
            $this->toastr->error("Sorry! Please try again later!");
            return redirect()->back()->with('error', 'Sorry! Please try again later!');
        }
    }
}
