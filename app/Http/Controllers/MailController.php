<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        // Change 'recipient@example.com' to your desired recipient email address
        $recipientEmail = 'manmeetkhurana29@gmail.com';

        // Send the email
        Mail::to($recipientEmail)->send(new TestMail());

        return "Test email sent successfully!";
    }
}
