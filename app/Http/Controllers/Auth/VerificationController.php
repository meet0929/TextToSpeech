<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use App\Models\User;
use App\Toastr;
class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

     use VerifiesEmails {
        verify as originalVerify;
    }

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';
     protected $toster;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Toastr $toastr)
    {
        $this->toastr = $toastr;
         $this->middleware('auth')->except('verify');;
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    public function verify(Request $request)
{

    $user = User::find($request->route('id'));

    if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) { 
        throw new AuthorizationException;
    }

    if ($user->markEmailAsVerified())
        event(new Verified($user));
    $this->toastr->success("You successfully verified your account!");
    return redirect($this->redirectPath())->with('verified', true);
}
    
}
