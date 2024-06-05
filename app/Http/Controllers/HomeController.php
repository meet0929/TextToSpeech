<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Country;
use App\Models\User;
use App\Models\Subscription;
use App\SpeechService;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $user;
    protected $countries;
    protected $speechservice;
    public function __construct(Country $countries , SpeechService $speechservice)
    {

      //  $this->middleware('auth');
        // $this->middleware(['verified'])->('index');
        $this->speechservice =  $speechservice;
        $this->countries =$countries->orderBy('country_name','asc')->get();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $response['countries'] = $this->countries;
        $subscriptions = Subscription::get();       
        $response['subscriptions'] = $subscriptions;
        $response['voices'] = array_slice($this->speechservice->getVoices()['voices'], 0, 12);  
         return view('home',$response);
    }
     public function aboutus()
    {
        $response['countries'] = $this->countries;
        return view('about-us', $response);
    }
      public function pricing()
    {
        $subscriptions = Subscription::get();
        $response['countries'] = $this->countries;
        $response['subscriptions'] = $subscriptions;
        return view('pricing',$response);
    }
       public function blog()
    {
        $response['countries'] = $this->countries;
        return view('blog', $response);
    }
    public function blogview()
    {
        $response['countries'] = $this->countries;
        return view('blog-view', $response);
    }
        public function contact()
    {
        $response['countries'] = $this->countries;
        return view('contact', $response);
    }
    public function terms()
    {
        $response['countries'] = $this->countries;
        return view('terms', $response);
    }
     public function policy()
    {
        $response['countries'] = $this->countries;
        return view('policy', $response);
    } 
      public function career()
    {
        $response['countries'] = $this->countries;
        return view('career', $response);
    }
       public function dmcapolicy()
    {
        $response['countries'] = $this->countries;
        return view('dmca-policy', $response);
    }
        public function refundpolicy()
    {
        $response['countries'] = $this->countries;
        return view('refund-policy', $response);
    }
    public function affiliate()
    {
        $response['affiliate'] = $this->countries;
        return view('affiliate', $response);
    }

}
