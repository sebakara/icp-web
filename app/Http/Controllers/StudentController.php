<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class StudentController extends Controller
{
    public function showCreateForm()
    {
        $courses = Course::all();
        return view('admin.student', compact('courses'));
    }

    public function createStudent(Request $request)
    {
        // Validation
        $request->validate([
            'Full_name' => 'required|string|max:255',
            'Email' => 'required|email|unique:students,email',
            'Biography_description' => 'nullable|string',
            'courses' => 'required|array',
            'courses.*' => 'exists:courses,id'
        ]);

        // Create Student
        $student = Student::create([
            'full_name' => $request->input('Full_name'),
            'email' => $request->input('Email'),
            'biography_description' => $request->input('Biography_description'),
        ]);

        // Attach courses
        $student->courses()->attach($request->input('courses'));

        // return response()->json($student);

        return response()->json(['success' => 'Student created successfully']);
    }

    public function getAllStudents()
    {
        $students = Student::with('courses')->paginate(10);
        return response()->json($students);
    }

    public function showAllStudents()
    {
        return view('admin.all-students');
    }

    public function getOneStudent($id)
    {
        $student = Student::with('courses')->findOrFail($id);
        return response()->json($student);
    }

    public function updateStudent(Request $request, $id)
    {
        // Validation
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'biography_description' => 'nullable|string',
            'courses' => 'required|array',
        ]);



        // Update Student
        $student = Student::findOrFail($id);
        $student->update([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'biography_description' => $request->input('biography_description'),
        ]);

        // Sync courses
        $student->courses()->sync($request->input('courses'));

        return redirect()->back()->with('success', 'Student updated successfully');
    }

    public function edit($id)
    {
        $student = Student::with('courses')->findOrFail($id);

        // Return the student data along with the course IDs for the JS to populate the form
        return response()->json([
            'full_name' => $student->full_name,
            'email' => $student->email,
            'biography_description' => $student->biography_description,
            'courses' => $student->courses->pluck('id'), // Return the array of course IDs
        ]);
    }


    public function deleteStudent($id)
    {
        $student = Student::findOrFail($id);
        $student->courses()->detach();
        $student->delete();

        return response()->json(['success' => 'Student deleted successfully']);
    }


    // Import students by excel file

    public function importStudentWithExcel(Request $request)
    {
        // Validate the request
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        // Load the spreadsheet file
        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file->path());

        // Get the first sheet
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();

        // Initialize arrays to keep track of created students and courses
        $studentsWithCourses = [];
        $courseNamesToCreate = [];

        // Loop through the data and process it
        foreach ($data as $row) {
            if ($row[0] !== 'Full_name') { // Skip header row
                // Extract course names
                $courseNames = explode(',', $row[3]); // Assuming courses are comma-separated in the Excel file

                // Collect new course names
                foreach ($courseNames as $courseName) {
                    $courseName = trim($courseName);
                    if (!Course::where('name', $courseName)->exists()) {
                        $courseNamesToCreate[] = $courseName;
                    }
                }

                // Create or update the student record
                $student = Student::updateOrCreate(
                    ['email' => $row[1]], // Assuming email is unique
                    ['full_name' => $row[0], 'email' => $row[1], 'biography_description' => $row[2]]
                );

                // Store the student's ID and associated course names
                $studentsWithCourses[$student->id] = $courseNames;
            }
        }

        // Create new courses if any
        foreach (array_unique($courseNamesToCreate) as $courseName) {
            Course::create(['name' => $courseName]);
        }

        // Re-fetch course IDs after creating new courses
        $courseNameToId = Course::pluck('id', 'name')->toArray();

        // Associate courses with students
        foreach ($studentsWithCourses as $studentId => $courseNames) {
            $student = Student::find($studentId);

            if ($student) {
                // Map course names to IDs
                $courseIds = array_map(function ($name) use ($courseNameToId) {
                    return $courseNameToId[$name] ?? null;
                }, $courseNames);

                // Filter out null values
                $validCourseIds = array_filter($courseIds);

                // Debugging: Log valid course IDs
                // \Log::info('Valid Course IDs for Student ID ' . $studentId . ':', $validCourseIds);

                // Sync courses
                if (!empty($validCourseIds)) {
                    $student->courses()->sync($validCourseIds);
                } else {
                    // \Log::warning('No valid course IDs for student ID: ' . $studentId);
                }
            } else {
                // \Log::warning('Student not found: ' . $studentId);
            }
        }

        return back()->with('success', 'Students imported successfully');
    }
}
