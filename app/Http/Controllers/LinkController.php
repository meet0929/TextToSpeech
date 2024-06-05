<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Country;
use App\Models\User;

class LinkController extends Controller
{
    //
    protected $user;
    protected $countries;
    public function __construct(Country $countries)
    {
      //  $this->middleware(['verified']);
        $this->countries =$countries->orderBy('country_name','asc')->get();
    }

    public function index()
    {
      
        $response['countries'] = $this->countries;

        return view('home',$response);
    }
}
