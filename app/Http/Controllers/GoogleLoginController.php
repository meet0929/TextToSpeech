<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

use App\Toastr;
use Illuminate\Support\Facades\DB;

class GoogleLoginController extends Controller
{
    protected $toastr;

    public function __construct(Toastr $toastr)
    {
        $this->toastr = $toastr;
      //  $this->middleware('auth');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        
        if($googleUser->email){
            
            $finduser = User::where('email', $googleUser->email)->first();
            
            if($finduser){
                Auth::login($finduser);
            }else{
                // Retrieve the soft deleted user by email
                $AccountDeleteUser = User::withTrashed()->where('email', $googleUser->email)->where('deleted_at', '!=','null')->first();
                if($AccountDeleteUser){
                    $this->toastr->error("Sorry! previously you have deleted account.");
                    return redirect()->back();
                }
                $newUser = User::create(['name' => $googleUser->name, 'email' => $googleUser->email, 'password' => \Hash::make(rand(100000,999999))]);
                Auth::login($newUser);
            }
            
        }
        return redirect()->route('home');
    }
}
