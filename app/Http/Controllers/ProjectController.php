<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    public function show($id)
    {
        // Support lookup by ID or Slug
        $project = Project::where('id', $id)->orWhere('slug', $id)->firstOrFail();
        return view('projects.show', compact('project'));
    }
}
