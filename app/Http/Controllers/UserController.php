<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        // if (Auth::check()) {
        return view('admin.index');
        // }

        return redirect("login")->withSuccess('You are not allowed to access');
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

    public function showUserProfilePage(){
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

        return redirect()->back()->with('success', 'Password updated successfully.');
    }


    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',

        ]);

        $userId = Auth::id(); // Get the authenticated user's ID

        $updateData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        DB::table('users')
            ->where('id', $userId)
            ->update($updateData);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
