<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{


    public function displayGallery()
    {

        $pictures = Gallery::all();

        // Fetch main categories (main events)
        $categories = Gallery::whereNull('parent_event_id')->select('Image_category as name')->distinct()->get();

        // Fetch featured images for main categories for "All" tab
        $featuredImages = $categories->map(function ($category) {
            return Gallery::where('Image_category', $category->name)->first();
        });

        // Fetch images grouped by event titles for the filtered tabs
        $subEvents = [];
        foreach ($categories as $category) {
            $subEvents[$category->name] = Gallery::where('Image_category', $category->name)
                ->groupBy('event_title')
                ->select('event_title', DB::raw('min(id) as id'))
                ->get()
                ->mapWithKeys(function ($event) {
                    return [$event->event_title => Gallery::where('event_title', $event->event_title)->get()];
                });
        }

        return view('client.gallery', [
            'pictures' => $pictures,
            'featuredImages' => $featuredImages,
            'categories' => $categories,
            'subEvents' => $subEvents,
        ]);
    }

    public function showCreateForm()
    {
        return view('admin.create-gallery');
    }

    public function createPicture(Request $request)
    {
        // Validation
        $request->validate([
            'Image_category' => 'required|string|max:255',
            'event_title' => 'required|string|max:255',
            'event_description' => 'nullable|string',
            'event_year' => 'required|integer|digits:4',
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
            'event_title' => $request->input('event_title'),
            'event_description' => $request->input('event_description'),
            'event_year' => $request->input('event_year'),
            'Image' => $image,
        ]);

        // Update the parent_event_id field to the same id as the newly created picture
        // $picture->update(['parent_event_id' => $picture->id]);

        // Return back to the dashboard view with a success message
        return response()->json(['success' => 'Image Added Seccessfully']);
    }

    public function showAllGallery()
    {
        return view('admin.gallery');
    }

    public function getOneImagePerCategory()
    {
        $pictures = Gallery::select('Image_category')
            ->distinct()
            ->with('images') // Define a relationship to get the images later
            ->get()
            ->map(function ($category) {
                $category->image = Gallery::where('Image_category', $category->Image_category)->first()->Image;
                return $category;
            });

        return response()->json($pictures);
    }

    public function getAllPicturesForCategory($category)
    {
        $pictures = Gallery::where('Image_category', $category)->get();
        return response()->json($pictures);
    }

    public function getAllPicture()
    {
        $pictures = Gallery::all();
        $groupedPictures = $pictures->groupBy('Image_category'); // Group by category
        return response()->json($groupedPictures);
    }

    public function getAllPictureFrontend()
    {
        // Get one image per category for initial display
        $categories = Gallery::select('Image_category as name')->distinct()->get();
        $featuredImages = $categories->map(function ($category) {
            return Gallery::where('Image_category', $category->name)->first();
        });

        return view('client.index', compact('featuredImages', 'categories'));
    }
    public function getOnePicture($id)
    {
        $picture = Gallery::findOrFail($id);
        return response()->json($picture);
    }

    public function showEditForm($id)
    {
        $picture = Gallery::findOrFail($id);
        return response()->json($picture); // Return JSON for modal
    }


    public function updatePicture(Request $request, $id)
    {
        // Validation
        $request->validate([
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the picture
        $picture = Gallery::findOrFail($id);
        Log::info('Found picture:', ['id' => $id]);

        if ($request->hasFile('Image')) {
            Log::info('File received:', ['file' => $request->file('Image')]);

            $file = $request->file('Image');
            $imageName = time() . '.' . $file->getClientOriginalExtension();

            if ($file->move(public_path('assets/img'), $imageName)) {
                $picture->Image = 'assets/img/' . $imageName; // Update path
                Log::info('File moved successfully:', ['new_image_path' => $picture->Image]);
            } else {
                Log::error('File move failed');
            }
        }

        if ($picture->save()) {
            Log::info('Picture saved successfully:', ['picture' => $picture]);
            return response()->json(['success' => 'Picture updated successfully']);
        } else {
            Log::error('Failed to save picture');
            return response()->json(['error' => 'Failed to update picture'], 500);
        }
    }



    public function deletePicture($id)
    {
        $picture = Gallery::findOrFail($id);
        $picture->delete();

        return response()->json(['success' => 'Image deleted Successfully']);
    }
}
