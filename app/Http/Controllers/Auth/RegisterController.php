<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Toastr;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        

      //  $this->middleware('guest')->except('logout');;
       $this->toastr = $toastr;
     
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
       
        $validation = Validator::make($data, [
    
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')],
            'password' => ['required'],
        ]);
       
    
      return  $validation;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
   {
        $user=  User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'email_verified_at' => null,
            'product_updates' => (isset($data['product_updates'])) ? 1 : 0,
        ]);
      
      
        return $user;
       
    }
     public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
          $this->toastr->success("User created successfully! Please verify your email to login");
        return $this->registered($request, $user)
              ?: redirect()->route('home');
    }

    public function update(Request $request)
    {

        try {
            $user = Auth::user();
            
            $request->validate([
                'name' => 'required|string|max:255',         
            ]);

            $user->name = $request->name;
        
            
            if($user->save()) {     
                $user->countries()->sync([$request->country]);
                
                $this->toastr->success("Profile updated successfully");
                return redirect()->route('home');
            } else {
                $this->toastr->error("Something worng on updation");            
                return redirect()->route('home');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function delete(Request $request) {
          $user = Auth::user();

    if ($request->email === $user->email) {
        if($user->delete()) {
            $this->toastr->success("Your account has been deleted.");
            Auth::logout();
            return redirect()->route('home');
        }
    } else {
          $this->toastr->warning("You are not authorized to delete this account.");
       
          return redirect()->back();
    }
    }
    public function confirm($id) {
        $user = User::find($id);
        if($user) {
              $this->toastr->success("Your email has been confirmed.");
                return redirect()->route('home');
        }
    }
}
