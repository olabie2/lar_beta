<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use App\Models\Career;
use Illuminate\Support\Facades\Storage;
class JobApplicationController extends Controller
{
    //
      public function store(Request $request, Career $career)
    {
        // 1. Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:2048', // 2MB Max
            'cover_letter' => 'nullable|string',
        ]);

        $resumePath = null;
        // 2. Handle the file upload
        if ($request->hasFile('resume')) {
            $resumePath = Storage::disk('public')->put('resumes', $request->file('resume'));
        }

        // 3. Create the database record
        JobApplication::create([
            'career_id' => $career->id,
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'resume_path' => $resumePath,
            'cover_letter' => $validatedData['cover_letter'],
        ]);

        // 4. Redirect back with a success message
        return back()->with('success', 'Thank you! Your application has been submitted successfully.');
    }
}
