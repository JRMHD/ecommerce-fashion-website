<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Mail\NewContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contactMessage = ContactMessage::create([
            'first_name' => $validatedData['firstname'],
            'last_name' => $validatedData['lastname'],
            'phone_number' => $validatedData['number'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
        ]);

        Mail::to('mikedrimz.star@gmail.com')->send(new NewContactMessage($contactMessage));

        if ($request->ajax()) {
            return response()->json(['message' => 'Message sent successfully!']);
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
