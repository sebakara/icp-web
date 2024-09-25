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
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

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





Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showUserProfilePage'])->name('showUserProfilePage');
    Route::post('/change/password', [UserController::class, 'changePassword']);
    Route::post('/change/profile', [UserController::class, 'updateProfile']);

    // Route for the dashboard
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('api/get-report-data', [UserController::class, 'getReportData'])->name('getReportData');


    // Route for sign out
    Route::get('signout', [UserController::class, 'signOut'])->name('signout');

    // Route for ICP services
    Route::post('/icp-services/create', [ICPServiceController::class, 'createICP'])->name('icp.create');
    Route::get('/service/{id}/edit', [ICPServiceController::class, 'editService']);
    Route::put('/icp-services/{id}/update', [ICPServiceController::class, 'updateICP'])->name('icp.update');
    Route::delete('/icp-services/delete', [ICPServiceController::class, 'deleteICP'])->name('icp.delete');
    Route::get('/icp-services/all', [ICPServiceController::class, 'getAllICP'])->name('icp.services');
    Route::get('/create-icp', [ICPServiceController::class, 'showCreateForm'])->name('showCreateForm');
    Route::get('/all-icp', [ICPServiceController::class, 'showAllServices'])->name('showAllServices');



    // Route for Team/Staff
    Route::get('/staff/all', [StaffController::class, 'getAllStaff'])->name('ShowAllTeam');
    Route::get('/all-staff', [StaffController::class, 'showAllStaff'])->name('showAllStaff');
    Route::get('/create-staff', [StaffController::class, 'showCreateForm'])->name('showStaffCreateForm');
    Route::post('/staff/create', [StaffController::class, 'createStaff'])->name('staff.create');
    // Route::put('/staff/update', [StaffController::class, 'updateStaff'])->name('staff.update');
    Route::delete('/staff/delete', [StaffController::class, 'deleteStaff'])->name('staff.delete');
    Route::get('/staff/{id}/edit', [StaffController::class, 'editStaff']);
    Route::put('/staff/{id}/update', [StaffController::class, 'updateStaff']);


    // Route for Gallery
    Route::get('/gallery-all', [GalleryController::class, 'showAllGallery'])->name('ShowAllGallery');
    Route::get('/gallery/all', [GalleryController::class, 'getAllPicture'])->name('getAllPicture');
    Route::get('/create-gallery', [GalleryController::class, 'showCreateForm'])->name('showGalleryCreateForm');
    Route::post('/gallery', [GalleryController::class, 'createPicture'])->name('gallery.create');
    Route::put('/gallery/{id}', [GalleryController::class, 'updatePicture'])->name('gallery.update');
    Route::delete('/gallery/{id}', [GalleryController::class, 'deletePicture'])->name('gallery.delete');


    // Route for Certificate
    Route::get('/create-certificate', [CertificateController::class, 'showCreateForm'])->name('showCerticateCreateForm');
    Route::post('/certificates/create', [CertificateController::class, 'generate'])->name('certificates.generate');
    Route::post('/certificates/participation/create', [CertificateController::class, 'generateParticipationCertificate'])->name('generateParticipationCertificate.generate');
    Route::post('/certificates/special/create', [CertificateController::class, 'generateSpecialCertificate'])->name('generateSpecialCertificate.generate');
    Route::put('/certificates/{id}', [CertificateController::class, 'updateCertificate'])->name('certificates.update');
    Route::delete('/certificates/{id}', [CertificateController::class, 'deleteCertificate'])->name('certificates.delete');
    Route::get('/certificates', [CertificateController::class, 'getAllCertificates'])->name('certificates.getAll');
    Route::get('/certificates/{id}', [CertificateController::class, 'getOneCertificate'])->name('certificates.getOne');
    // routes/web.php

    Route::get('/student/certificates', [CourseController::class, 'showCoursesWithStudents'])->name('showStudentAndCertificates');


    // Route for Contact form
    Route::get('/get-messages', [CustomerSupportCustomer::class, 'showMessageForm'])->name('showMessageForm');
    Route::post('/customer-support', [CustomerSupportCustomer::class, 'createMessage'])->name('customer-support.create');
    Route::get('/customer/support', [CustomerSupportCustomer::class, 'allMessages'])->name('customer-support.all');
    Route::get('/customer-support/{id}', [CustomerSupportCustomer::class, 'findMessage'])->name('customer-support.find');
    Route::delete('/customer-support/delete', [CustomerSupportCustomer::class, 'deleteMessage'])->name('customer-support.delete');


    // Route for Blog

    // Blog routes
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/get-dashboard', [BlogController::class, 'showAllBlog'])->name('showAllBlog');
    Route::get('/create-blog', [BlogController::class, 'create'])->name('showCreateBlogForm');
    Route::post('/store/blog', [BlogController::class, 'createBlog'])->name('storeBlog');
    Route::post('/upload-image', [BlogController::class, 'uploadImage'])->name('upload.image');
    Route::get('/admin-blog/{slug}', [BlogController::class, 'showAdmin'])->name('blogs.showAdmin');




    // Route for Students
    Route::get('/students/create', [StudentController::class, 'showCreateForm'])->name('showCreateStudentForm');
    Route::post('/create/student', [StudentController::class, 'createStudent'])->name('student.create');
    Route::get('/Students/all', [StudentController::class, 'showAllStudents'])->name('students.all');
    Route::get('/all/students', [StudentController::class, 'getAllStudents']);
    Route::delete('/student/delete/{id}', [StudentController::class, 'deleteStudent']);
    Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
    Route::put('/students/{id}/update', [StudentController::class, 'updateStudent']);



    // Route fo course
    Route::get('/courses/{course}/students', [CourseController::class, 'getStudentsForCourse']);
    Route::get('/course/create', [CourseController::class, 'showCreateForm'])->name('showCreateCourseForm');
    Route::post('/create/course', [CourseController::class, 'createCourse'])->name('course.create');
    Route::get('/courses/all', [CourseController::class, 'getAllCourses'])->name('courses.all');
    Route::get('/courses-all', [CourseController::class, 'showAllCourses'])->name('courses.ShowAll');
    Route::post('/import', [StudentController::class, 'importStudentWithExcel'])->name('import');
    Route::get('/courses/{id}/edit', [CourseController::class, 'editCourse']);
    Route::put('/courses/{id}/update', [CourseController::class, 'updateCourse']);
});
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/gallery-page', [GalleryController::class, 'displayGallery']);

Route::get('/certificates/download/{id}', function ($id) {
    $certificate = Certificate::findOrFail($id);
    $filePath = public_path('assets/' . $certificate->file_path);

    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        abort(404, 'Certificate not found.');
    }
})->name('certificates.download');
