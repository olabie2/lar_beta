<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->take(3)->get();
        return view('welcome', compact('projects'));
    }
    public function test()
    {
        return view('test');
    }
}
