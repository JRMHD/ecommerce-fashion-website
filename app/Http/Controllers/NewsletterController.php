<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use App\Mail\NewsletterSubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        $subscriber = NewsletterSubscriber::create([
            'email' => $validatedData['email'],
        ]);

        // Send confirmation email to the subscriber
        Mail::to($subscriber->email)->send(new NewsletterSubscriptionConfirmation($subscriber));

        if ($request->ajax()) {
            return response()->json(['message' => 'Subscribed successfully!']);
        }

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
