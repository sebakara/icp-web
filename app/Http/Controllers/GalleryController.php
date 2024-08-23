<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function showCreateForm()
    {
        return view('admin.create-gallery');
    }

    public function createPicture(Request $request)
    {
        // Validation
        $request->validate([
            'Image_category' => 'required|string|max:255',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $image = null;
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img'), $imageName);
            $image = 'assets/img/' . $imageName;
        }

        // Create Picture
        $picture = Gallery::create([
            'Image_category' => $request->input('Image_category'),
            'Image' => $image,
        ]);

        // Return back to the dashboard view with a success message
        return redirect()->back()->with('success', 'ICP Service created successfully');
    }

    public function showAllGallery()
    {
        return view('admin.gallery');
    }

    public function getAllPicture()
    {
        $pictures = Gallery::all();
        $groupedPictures = $pictures->groupBy('Image_category'); // Group by category
        return response()->json($groupedPictures);
    }

    public function getAllPictureFrontend()
    {
        $pictures = Gallery::all();
        return view('client.index', compact('pictures'));
    }

    public function getOnePicture($id)
    {
        $picture = Gallery::findOrFail($id);
        return response()->json($picture);
    }

    public function updatePicture(Request $request, $id)
    {
        // Validation
        $request->validate([
            'Image_category' => 'required|string|max:255',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $image = null;
        if ($request->hasFile('Image')) {
            $file = $request->file('Image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img'), $imageName);
            $image = 'assets/img/' . $imageName;
        }

        // Update Picture
        $picture = Gallery::findOrFail($id);
        $picture->update([
            'Image_category' => $request->input('Image_category'),
            'Image' => $image ?? $picture->Image,
        ]);

        return redirect()->back()->with('success', 'Picture updated successfully');
    }

    public function deletePicture($id)
    {
        $picture = Gallery::findOrFail($id);
        $picture->delete();

        return redirect()->back()->with('success', 'Picture updated successfully');
    }
}
