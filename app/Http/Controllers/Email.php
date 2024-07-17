<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email or save data to the database
        Mail::to('mohamed2errouhe@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->route('home')->with('success', 'Your message has been sent!');
    }
}
