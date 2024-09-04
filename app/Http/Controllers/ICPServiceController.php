<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;
use App\Models\Staff;
use App\Models\Blog;

use Illuminate\Http\Request;

class ICPServiceController extends Controller
{
    // Create a new ICP service

    public function showCreateForm()
    {
        return view('admin.create-icp');
    }

    public function createICP(Request $request)
    {
        $request->validate([
            'Service_title' => 'required|string|max:255',
            'Service_description' => 'nullable|string|max:255',
            'Icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $Service_title = $request->input('Service_title');
        $Service_description = $request->input('Service_description');
        $Icon = null;

        if ($request->hasFile('Icon')) {
            $image = $request->file('Icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            $Icon = 'assets/img/' . $imageName;
        }

        $service = Service::create([
            'Service_title' => $Service_title,
            'Service_description' => $Service_description,
            'Icon' => $Icon,
        ]);

        // Return a JSON response with a success message
        return response()->json(['success' => 'ICP Service created successfully']);
    }

    // Get all ICP services for the backend

    public function showAllServices()
    {
        return view('admin.all-services');
    }

    public function getAllICP()
    {
        $services = Service::all();
        return response()->json($services);
    }

    // Get all ICP services for the frontend
    public function getAllICP_frontend()
    {
        $services = Service::all();
        $staffs = Staff::all();
        $blogs = Blog::all();
        $pictures = Gallery::all();
        $categories = Gallery::select('Image_category as name')->distinct()->get();

        // $categories = Gallery::select('Image_category as name')->distinct()->get();
        $featuredImages = $categories->map(function($category) {
            return Gallery::where('Image_category', $category->name)->first();
        });


        return view('client.index', [
            'services' => $services,
            'pictures' => $pictures,
            'staffs' => $staffs,
            'blogs' => $blogs,
            'featuredImages' => $featuredImages,
            'categories' => $categories
        ]);
    }

    // Get a specific ICP service
    public function getOneICP(Request $request)
    {
        $service = Service::findOrFail($request->input('id'));
        return response()->json($service);
    }

    // Update an ICP service
    public function updateICP(Request $request)
    {
        $request->validate([
            'Service_title' => 'required|string|max:255',
            'Service_description' => 'nullable|string|max:255',
            'Icon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = Service::findOrFail($request->input('id'));

        $service->Service_title = $request->input('Service_title');
        $service->Service_description = $request->input('Service_description');

        if ($request->hasFile('Icon')) {
            $image = $request->file('Icon');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            $service->Icon = 'assets/img/' . $imageName;
        }

        $service->save();

        return redirect()->back()->with('success', 'ICP Service updated successfully');
    }

    // Delete an ICP service
    public function deleteICP(Request $request)
    {
        $service = new Service();
        $service->destroy($request->input('id'));

        return response()->json(['success' => 'ICP Service deleted successfully']);
    }

    // Get all services to display on the dashboard
    // public function getDashboard()
    // {
    //     $services_on_backend = Service::all();
    //     $team = Staff::all(); 
    //     $pictures = Gallery::all();
    //     $certificates = Certificate::all();
    //     $messages = Customer_Support::all();

    //     return view('client.dashboard', ['services_on_backend' => $services_on_backend, 'team'=>$team, 'pictures'=>$pictures, 'certificates'=>$certificates, 'messages'=>$messages]);
    // }
}
