<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ICPServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CustomerSupportCustomer;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route for the client index page
Route::get('/', [ICPServiceController::class, 'getAllICP_frontend']);

// Routes for the admin login
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');

// Routes for user registration
Route::get('registration', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');

Route::get('/profile', [UserController::class, 'showUserProfilePage'])->name('showUserProfilePage');
Route::post('/change/password', [UserController::class, 'changePassword']);
Route::post('/change/profile', [UserController::class, 'updateProfile']);

// Route for the dashboard
Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

// Route for sign out
Route::get('signout', [UserController::class, 'signOut'])->name('signout');






// Route::get('/dashboard/icp-services', [ICPServiceController::class, 'getDashboard'])->name('icp.dashboard');
Route::post('/icp-services/create', [ICPServiceController::class, 'createICP'])->name('icp.create');
Route::put('/icp-services/update', [ICPServiceController::class, 'updateICP'])->name('icp.update');
Route::delete('/icp-services/delete', [ICPServiceController::class, 'deleteICP'])->name('icp.delete');
Route::get('/icp-services/all', [ICPServiceController::class, 'getAllICP'])->name('icp.services');
Route::get('/create-icp', [ICPServiceController::class, 'showCreateForm'])->name('showCreateForm');
Route::get('/all-icp', [ICPServiceController::class, 'showAllServices'])->name('showAllServices');

// web.php
Route::get('/staff/all', [StaffController::class, 'getAllStaff'])->name('ShowAllTeam');
Route::get('/all-staff', [StaffController::class, 'showAllStaff'])->name('showAllStaff');
Route::get('/create-staff', [StaffController::class, 'showCreateForm'])->name('showStaffCreateForm');
Route::post('/staff/create', [StaffController::class, 'createStaff'])->name('staff.create');
// Route::put('/staff/update', [StaffController::class, 'updateStaff'])->name('staff.update');
Route::delete('/staff/delete', [StaffController::class, 'deleteStaff'])->name('staff.delete');
Route::get('/staff/{id}/edit', [StaffController::class, 'editStaff']);
Route::put('/staff/{id}/update', [StaffController::class, 'updateStaff']);

// Route::get('/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');

Route::get('/gallery-all', [GalleryController::class, 'showAllGallery'])->name('ShowAllGallery');
Route::get('/gallery/all', [GalleryController::class, 'getAllPicture'])->name('getAllPicture');
Route::get('/create-gallery', [GalleryController::class, 'showCreateForm'])->name('showGalleryCreateForm');
Route::post('/gallery', [GalleryController::class, 'createPicture'])->name('gallery.create');
Route::put('/gallery/{id}', [GalleryController::class, 'updatePicture'])->name('gallery.update');
Route::delete('/gallery/{id}', [GalleryController::class, 'deletePicture'])->name('gallery.delete');


Route::get('/create-certificate', [CertificateController::class, 'showCreateForm'])->name('showCerticateCreateForm');
Route::post('/certificates/create', [CertificateController::class, 'generate'])->name('certificates.generate');
Route::put('/certificates/{id}', [CertificateController::class, 'updateCertificate'])->name('certificates.update');
Route::delete('/certificates/{id}', [CertificateController::class, 'deleteCertificate'])->name('certificates.delete');
Route::get('/certificates', [CertificateController::class, 'getAllCertificates'])->name('certificates.getAll');
Route::get('/certificates/{id}', [CertificateController::class, 'getOneCertificate'])->name('certificates.getOne');


Route::get('/get-messages', [CustomerSupportCustomer::class, 'showMessageForm'])->name('showMessageForm');
Route::post('/customer-support', [CustomerSupportCustomer::class, 'createMessage'])->name('customer-support.create');
Route::get('/customer/support', [CustomerSupportCustomer::class, 'allMessages'])->name('customer-support.all');
Route::get('/customer-support/{id}', [CustomerSupportCustomer::class, 'findMessage'])->name('customer-support.find');
Route::delete('/customer-support/delete', [CustomerSupportCustomer::class, 'deleteMessage'])->name('customer-support.delete');


Route::get('/get-dashboard', [BlogController::class, 'showAllBlog'])->name('showAllBlog');
Route::post('/store/blog', [BlogController::class, 'createBlog'])->name('storeBlog');
Route::get('/blog-frontend/{id}', [BlogController::class, 'show'])->name('blogs.show');


Route::get('/students/create', [StudentController::class, 'showCreateForm'])->name('showCreateStudentForm');
Route::post('/create/student', [StudentController::class, 'createStudent'])->name('student.create');
Route::get('/Students/all', [StudentController::class, 'showAllStudents'])->name('students.all');
Route::get('/all/students', [StudentController::class, 'getAllStudents']);


Route::get('/course/create', [CourseController::class, 'showCreateForm'])->name('showCreateCourseForm');
Route::post('/create/course', [CourseController::class, 'createCourse'])->name('course.create');
Route::get('/courses/all', [CourseController::class, 'getAllCourses'])->name('courses.all');


Route::post('/import', [StudentController::class, 'importStudentWithExcel'])->name('import');








