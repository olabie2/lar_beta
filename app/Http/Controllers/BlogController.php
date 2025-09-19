<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index()
    {
        // 1. Fetch the single, absolute latest blog post.
        $latestBlog = Blog::latest()->first();

        // 2. Fetch all other posts in a paginated collection.
        //    The 'when' clause ensures we only add the 'where' condition if a latest blog actually exists.
        //    This prevents duplication and handles cases where there are 0 or 1 blogs.
        $otherBlogs = Blog::latest()
                        ->when($latestBlog, function ($query) use ($latestBlog) {
                            return $query->where('id', '!=', $latestBlog->id);
                        })
                        ->paginate(9); // Display 9 posts per page in the grid below the featured one.

        // 3. Pass both variables to the view.
        return view('blog.index', [
            'latestBlog' => $latestBlog,
            'otherBlogs' => $otherBlogs,
        ]);
    }
    public function show(Blog $Blog)
    {
        return view('blog.show', ['blog' => $Blog]);
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required|max:100',
            'slug' => 'required|unique:blogs,slug|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image_path'] = $imagePath;
        }

        Blog::create($validated);

        return redirect()->route('blog.index')->with('success', 'Blog post created successfully.');
    }
}
