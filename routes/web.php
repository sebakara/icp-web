<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ICPServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CustomerSupportCustomer;
use App\Http\Controllers\BlogController;

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
Route::put('/staff/update', [StaffController::class, 'updateStaff'])->name('staff.update');
Route::delete('/staff/delete', [StaffController::class, 'deleteStaff'])->name('staff.delete');
// Route::get('/dashboard', [StaffController::class, 'dashboard'])->name('staff.dashboard');

Route::get('/gallery-all', [GalleryController::class, 'showAllGallery'])->name('ShowAllGallery');
Route::get('/create-gallery', [GalleryController::class, 'showCreateForm'])->name('showGalleryCreateForm');
Route::post('/gallery', [GalleryController::class, 'createPicture'])->name('gallery.create');
Route::put('/gallery/{id}', [GalleryController::class, 'updatePicture'])->name('gallery.update');
Route::delete('/gallery/{id}', [GalleryController::class, 'deletePicture'])->name('gallery.delete');


Route::get('/create-certificate', [CertificateController::class, 'showCreateForm'])->name('showCerticateCreateForm');
Route::post('/certificates', [CertificateController::class, 'generate'])->name('certificates.generate');
Route::put('/certificates/{id}', [CertificateController::class, 'updateCertificate'])->name('certificates.update');
Route::delete('/certificates/{id}', [CertificateController::class, 'deleteCertificate'])->name('certificates.delete');
Route::get('/certificates', [CertificateController::class, 'getAllCertificates'])->name('certificates.getAll');
Route::get('/certificates/{id}', [CertificateController::class, 'getOneCertificate'])->name('certificates.getOne');


Route::get('/get-messages', [CustomerSupportCustomer::class, 'showMessageForm'])->name('showMessageForm');
Route::post('/customer-support', [CustomerSupportCustomer::class, 'createMessage'])->name('customer-support.create');
Route::get('/customer-support', [CustomerSupportCustomer::class, 'allMessages'])->name('customer-support.all');
Route::get('/customer-support/{id}', [CustomerSupportCustomer::class, 'findMessage'])->name('customer-support.find');
Route::delete('/customer-support/{id}', [CustomerSupportCustomer::class, 'deleteMessage'])->name('customer-support.delete');



Route::resource('blogs', BlogController::class);






