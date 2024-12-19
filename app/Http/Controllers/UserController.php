<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index');
    }

    /**
     *
     *
     * admin login
     */
    public function login()
    {
        return view('admin.adminlogin');
    }
    /**
     * post login function
     */
    public function customLogin(Request $request)
    {
        $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }
    // register

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'facebook' => $data['facebook'] ?? null,
            'instagram' => $data['instagram'] ?? null,
            'twitter' => $data['twitter'] ?? null,
        ]);
    }

    public function getReportData()
    {
        // Fetch enrollment data for the last 7 days
        $enrollments = Student::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy(DB::raw('DATE(created_at)'))  // Grouping by date only
            ->orderBy('date', 'asc')
            ->get()
            ->pluck('total')
            ->toArray();

        // Fetch certificate data for the last 7 days
        $certificates = Certificate::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy(DB::raw('DATE(created_at)'))  // Grouping by date only
            ->orderBy('date', 'asc')
            ->get()
            ->pluck('total')
            ->toArray();

        // Fetch dates for the last 7 days
        $dates = Certificate::select(DB::raw('DATE(created_at) as date'))
            ->where('created_at', '>=', Carbon::now()->subDays(7))
            ->groupBy(DB::raw('DATE(created_at)'))  // Grouping by date only
            ->orderBy('created_at', 'asc')
            ->pluck('date')
            ->toArray();

        // Return the data as JSON response for the chart
        return response()->json([
            'enrollments' => $enrollments,
            'certificates' => $certificates,
            'dates' => $dates
        ]);
    }


    public function dashboard()
    {

        $totalStudents = Student::count();
        $totalCourses = Course::count();
        $totalCertificate = Certificate::count();
        $courses = Course::withCount('students')
        ->orderBy('students_count', 'desc')
        ->get();
        // var_dump($totalCertificate);
        // die();

        return view('admin.index',  [
            'totalStudents' => $totalStudents,
            'totalCourses' => $totalCourses,
            'totalCertificate' => $totalCertificate,
            'courses' => $courses,
        ]);
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function showRegistrationForm()
    {
        return view('admin.pages-register');
    }

    public function showUserProfilePage()
    {
        return view('admin.users-profile');
    }


    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user(); // Get the authenticated user

        // Check if the provided current password is correct
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return redirect()->back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        DB::table('users')
            ->where('id', $user->id)
            ->update(['password' => Hash::make($request->input('new_password'))]);

        return Redirect('login');
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',

        ]);

        $userId = Auth::id(); // Get the authenticated user's ID

        $updateData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'twitter' => $request->input('twitter'),
        ];

        DB::table('users')
            ->where('id', $userId)
            ->update($updateData);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
