<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoRequest;
use Carbon\Carbon;
class DemoController extends Controller
{
    //
    public function index()
    {
        return view('demo');
    }
    public function store(Request $request)
    {
    
        $validatedData = $request->validate([
            'full_name'   => 'required|string|max:255',
            'company'     => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'service'     => 'required|string|max:255',
            'description' => 'required|string',
            'company_size'=> 'required|string|max:255',
            'file_path'   => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048', 
            'gdpr_consent'=> 'accepted', 
        ]);

        $dataToStore = [
            'full_name'   => $validatedData['full_name'],
            'company'     => $validatedData['company'],
            'email'       => $validatedData['email'],
            'service'     => $validatedData['service'],
            'description' => $validatedData['description'],
            'company_size'=> $validatedData['company_size'],
       
            'gdpr_consented_at' => Carbon::now(),
        ];

      
        if ($request->hasFile('file_path')) {
            
            $path = $request->file('file_path')->store('demo-uploads', 'public');
            $dataToStore['file_path'] = $path;
        }

       
        DemoRequest::create($dataToStore);

        
        return back()->with('success', 'Your demo request has been submitted successfully!');
    }
}
