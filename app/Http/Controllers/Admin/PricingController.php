<?php

namespace App\Http\Controllers\Admin;
use App\Models\Subscription;
use App\Http\Controllers\Controller;
use App\Toastr;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    protected $toastr;
    public function index() {
        
    }
    public function edit($id) {
        $response['price'] = Subscription::find($id);
        return view('admin.updateprice', $response);
    }
    public function update($id, Request $request) {

    $subscription = Subscription::findOrFail($id);

    // Validation rules
    $rules = [
        'name' => 'required|string',
        'package_name' => 'required|string',
        'price' => 'required|numeric',
        'type' => 'required|string',
        'characters_allowed' => 'required|string',
        'currency' => 'required|string',
        'description' => 'nullable|string',
    ];

    // Validate the incoming request data
    $validatedData = $request->validate($rules);

    // Update the subscription record with the validated data
    $subscription->update($validatedData);

    // Redirect back with success message or to the appropriate page
    return redirect()->route('admin.price.index')->with('success', 'Subscription updated successfully.');
    }
}
