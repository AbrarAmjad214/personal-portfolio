<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        // The hidden "website" field is only filled in by bots — pretend it worked so they move on.
        if ($request->filled('website')) {
            return redirect()->route('contact')->withFragment('brief')->with('contact_sent', true);
        }

        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'service' => ['required', 'string', 'max:100'],
            'budget' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
        ], [
            'message.min' => 'Please add a little more detail about your project.',
        ]);

        try {
            Mail::to(config('portfolio.contact.recipient'))->send(new ContactUsMail($data));
        } catch (\Throwable $e) {
            Log::error('Contact form email failed: ' . $e->getMessage());

            return redirect()->route('contact')->withFragment('brief')->withInput()->with('contact_failed', true);
        }

        return redirect()->route('contact')->withFragment('brief')->with('contact_sent', true);
    }
}
