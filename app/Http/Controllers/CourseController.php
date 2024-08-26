<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showCreateForm()
    {
        return view('admin.courses');
    }

    public function createCourse(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Create Course
        Course::create($request->all());

        return redirect()->back()->with('success', 'Course created successfully');
    }

    public function getAllCourses()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    public function showAllCourses()
    {
        return view('admin.all-courses');
    }

    public function getOneCourse($id)
    {
        $course = Course::findOrFail($id);
        return response()->json($course);
    }

    public function updateCourse(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Update Course
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect()->back()->with('success', 'Course updated successfully');
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->students()->detach(); // Detach students before deleting
        $course->delete();

        return redirect()->back()->with('success', 'Course deleted successfully');
    }
}
