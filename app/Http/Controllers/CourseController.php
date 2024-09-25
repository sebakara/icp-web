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

        return response()->json(['success' => 'Course Added Seccessfully']);
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

    public function editCourse($id)
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

        return response()->json(['success' => 'Course updated successfully']);
    }

    public function deleteCourse($id)
    {
        $course = Course::findOrFail($id);
        $course->students()->detach(); // Detach students before deleting
        $course->delete();

        return response()->json(['success' => 'Course deleted Successfully']);
    }

    // CourseContrller.php
    public function getStudentsForCourse($courseId)
    {
        // Find the course and paginate the students
        $course = Course::findOrFail($courseId);
        $students = $course->students()->paginate(10); // Paginate students, 10 per page

        return response()->json([
            'students' => $students->items(), // Get the student records
            'pagination' => [
                'total' => $students->total(),
                'current_page' => $students->currentPage(),
                'per_page' => $students->perPage(),
                'last_page' => $students->lastPage(),
            ]
        ]);
    }


    public function showStudentAndCertificates()
    {
        return view('admin.students-certificate');
    }

    public function showCoursesWithStudents()
    {
        $courses = Course::with('students')->get();

        return view('admin.students-certificate', compact('courses'));
    }
}
