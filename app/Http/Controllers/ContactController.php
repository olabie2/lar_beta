<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }
    public function submit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Process the data (e.g., send an email, save to database, etc.)
        // For demonstration, we'll just return a success message.

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
