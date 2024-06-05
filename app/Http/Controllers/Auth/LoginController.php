<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\Rule;
use Validator;
use App\Toastr;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/speech-synthesis';
    protected $toster;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct(Toastr $toastr)
    {
        $this->middleware('guest')->except('logout');
          $this->toastr = $toastr;
    }
 

 protected function authenticated(Request $request, $user)
    {
     
        if (!$user->hasVerifiedEmail()) { 
            Auth::logout();
            $this->toastr->success("You need to verify your email address first.");
            return redirect()->route('home');
               
        }

        return redirect()->intended($this->redirectPath());
    }
   
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Use $user to authenticate or register the user
    }
    public function redirectToFacebook()
{

    return Socialite::driver('facebook')->redirect();
}

public function handleFacebookCallback()
{
    $user = Socialite::driver('facebook')->user();
}
}
