<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Toastr;
use Illuminate\Support\Facades\Http;
class SubscriptionController extends Controller{
    protected $toastr;
    public function index() {
        
    }
    public function edit($id) {
        $response['subscription'] = Subscription::find($id);
        return view('admin.updatesubscription', $response);
    }
    public function update($id, Request $request) {

    }

}