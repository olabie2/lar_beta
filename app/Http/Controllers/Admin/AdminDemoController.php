<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemoRequest;
use Illuminate\Http\Request;

class AdminDemoController extends Controller
{
    public function index()
    {
        $demos = DemoRequest::latest()->paginate(15);
        return view('admin.demos.index', compact('demos'));
    }

    public function show(DemoRequest $demo)
    {
        return view('admin.demos.show', compact('demo'));
    }

    public function destroy(DemoRequest $demo)
    {
        $demo->delete();
        return redirect()->route('admin.demos.index')->with('success', 'Demo request deleted successfully!');
    }
}
