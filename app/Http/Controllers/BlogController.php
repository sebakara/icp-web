<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;


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
        return view('admin.create-blog');
    }

    // Store a newly created blog in the database
    public function createBlog(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
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

            return response()->json(['success' => 'Blog has been created successfully']);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Log validation errors
            Log::error('Validation failed:', ['errors' => $e->errors()]);

            return response()->json(['error' => 'Validation failed', 'details' => $e->errors()], 422);
        } catch (\Exception $e) {
            // Log other errors
            Log::error('Error creating blog post:', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);

            return response()->json(['error' => 'Error creating blog post: ' . $e->getMessage()], 500);
        }
    }




    // Display the specified blog
    public function show($slug)
    {
        $blog =  Blog::where('slug', $slug)->firstOrFail();

        return view('admin.singleBlog', compact('blog'));
    }

    public function showAdmin($slug)
    {
        $blog =  Blog::where('slug', $slug)->firstOrFail();

        return view('admin.singleBlogAdminView', compact('blog'));
    }


    public function showAllBlog()
    {
        $blogs = Blog::paginate(2);

        return view('admin.all-blogs', [
            'blogs' => $blogs,
        ]);
    }

    // Show the form for editing the specified blog
    public function edit($id)
    {
        $blog = Blog::find($id);
        return response()->json($blog);
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

        return redirect()->route('showAllBlog')->with('success', 'Blog updated successfully.');
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
        
        // Return a JSON response indicating success
        return response()->json(['success' => 'Blog deleted successfully.']);
    }
    
}
