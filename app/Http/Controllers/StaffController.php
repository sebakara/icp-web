<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StaffController extends Controller
{

    public function showCreateForm()
    {
        return view('admin.create-staff');
    }

    public function createStaff(Request $request)
    {
        // Validation
        $request->validate([
            'Full_name' => 'required|string|max:255',
            'Position' => 'nullable|string|max:255',
            'Profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Biography_description' => 'nullable|string',
        ]);

        // Handle file upload
        $profile_image = null;
        if ($request->hasFile('Profile_image')) {
            $image = $request->file('Profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            $profile_image = 'assets/img/' . $imageName;
        }

        // Create Staff
        $staff = Staff::create([
            'Full_name' => $request->input('Full_name'),
            'Position' => $request->input('Position'),
            'Profile_image' => $profile_image,
            'Biography_description' => $request->input('Biography_description'),
        ]);

        // Return back to the dashboard view with a success message
        return redirect()->back()->with('success', 'ICP Service created successfully');
    }

    public function getAllStaff()
    {
        $staffs = Staff::all();
        return response()->json($staffs);
    }

    public function showAllStaff()
    {
        return view('admin.all-staff');
    }

    public function getAllStafffrontend()
    {
        $staffs = Staff::all();
        return view('client.index', compact('staffs'));
    }

    public function dashboard()
    {
        $team = Staff::all();

        return view('client.dashboard', ['team' => $team]);
    }

    public function editStaff($id)
    {
        $staff = Staff::findOrFail($id);
        return response()->json($staff);
    }


    public function getOneStaff(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);
        return response()->json($staff);
    }

    public function updateStaff(Request $request, $id)
    {
        // Validation
        $request->validate([
            'Full_name' => 'required|string|max:255',
            'Position' => 'nullable|string|max:255',
            'Biography_description' => 'nullable|string',
        ]);

        // Handle file upload
        $profile_image = null;
        if ($request->hasFile('Profile_image')) {
            $image = $request->file('Profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img'), $imageName);
            $profile_image = 'assets/img/' . $imageName;
        }

        // Update Staff
        $staff = Staff::findOrFail($id);
        $staff->update([
            'Full_name' => $request->input('Full_name'),
            'Position' => $request->input('Position'),
            'Profile_image' => $profile_image ?? $staff->Profile_image,
            'Biography_description' => $request->input('Biography_description'),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Staff updated successfully'
        ]);
    }

    public function deleteStaff(Request $request)
    {
        $staff = new Staff();
        $staff->destroy($request->input('id'));

        return redirect()->back()->with('success', 'Staff Service deleted successfully');
    }
}
