<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Toastr;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    //

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
    public function apply(Request $request)
    {

           
            $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string',
                'position' => 'required|string',
                'linkedin_profile' => 'nullable|url',
                'file' => 'required|file|mimes:pdf,doc,docx|max:25000',
            ]);


            try {
            // Handle file upload
            $resumePath = $request->file('file')->store('myfile');

            // Create job application record
            JobApplication::create([
                'job_id' => 1,
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'position' => $request->get('position'),
                'linkedin_profile' => $request->get('linkedin_profile'),
                'message' => $request->get('message'),
                'resume' => $resumePath, // Store file path in the database
            ]);

            $this->toastr->success(
                "Your job application has been submitted successfully!"
            );
            return redirect()->back()->with('success', 'Your job application has been submitted successfully!');

         //code...
        } catch (\Throwable $th) {
            //throw $th;
            $this->toastr->error(
                "something went Wrong"
            );
            return redirect()->back()->with('error', 'Unable to save record!');

        }
    }
    
}
