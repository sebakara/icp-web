<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Display a listing of the blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    // Show the form for creating a new blog
    public function create()
    {
        return view('blogs.create');
    }

    // Store a newly created blog in the database
    public function createBlog(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $image = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/blogs'), $imageName);
            $image = 'assets/img/blogs/' . $imageName;
        }

        // Create the blog post
        $newBlog = Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $image,
        ]);

        // return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
        return response()->json($newBlog);
    }

    // Display the specified blog
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        // $otherBlogs = Blog::where('id', '!=', $id)->limit(5)->get(); 
        return view('admin.singleBlog', compact('blog'));
        
    }


    public function showAllBlog()
    {
        return view('admin.front-page');
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }

    // Update the specified blog in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        // Handle file upload if a new image is uploaded
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/blogs'), $imageName);
            $blog->image = 'assets/img/blogs/' . $imageName;
        }

        // Update blog details
        $blog->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $blog->image,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    // Remove the specified blog from the database
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the blog's image if it exists
        if ($blog->image) {
            unlink(public_path($blog->image));
        }

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
}
