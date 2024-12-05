<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactUsController extends Controller
{
    public function ContactusEmail(Request $request)
    {
        try {
            // Collecting the data from the request using your specified style
            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            );

            // Logging the data for debugging purposes
            Log::info('From Address:', [config('mail.from.address')]);
            Log::info('Contact Form Data:', $data);
            
            // Email will be picked from .env using config()
            Mail::to(config('mail.from.address'))->send(new ContactUsMail($data));

            return redirect()->back()->with('success', 'Thank you for reaching out to us! We’ll get back to you as soon as possible.');

        } catch (\Exception $e) {
            // Logging the error for debugging
            Log::error('Form submission error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Something went wrong. The website was unable to send the details, but you can reach us at <a href="mailto:info@expertdrive.com">info@expertdrive.com</a> or call us at <a href="tel:+442036334942">+44 203 633 4942</a>.');
        }
    }
}
