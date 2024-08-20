<?php

use App\Http\Controllers\CustomerSupportCustomer;
use App\Http\Controllers\GalleryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ICPServiceController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CertificateController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Services Endpoints
Route::post('create/service', [ICPServiceController::class, 'createICP']);
Route::get('all/services', [ICPServiceController::class, 'getAllICP']);
Route::get('find/service', [ICPServiceController::class, 'getOneICP']);
Route::patch('update/service', [ICPServiceController::class, 'updateICP']);
Route::delete('delete/service', [ICPServiceController::class, 'deleteICP']);

// Gallery Endpoints
Route::post('create/gallery', [GalleryController::class, 'createPicture']);
Route::get('all/gallery', [GalleryController::class, 'getAllPicture']);
Route::get('find/gallery', [GalleryController::class, 'getOnePicture']);
Route::patch('update/gallery', [GalleryController::class, 'updatePicture']);
Route::delete('delete/gallery', [GalleryController::class, 'deletePicture']);

// Contact/Customer Support Endpoints
Route::post('create/message', [CustomerSupportCustomer::class, 'createMessage']);
Route::get('all/messages', [CustomerSupportCustomer::class, 'allMessages']);
Route::get('find/message', [CustomerSupportCustomer::class, 'findMessage']);
Route::delete('delete/message', [CustomerSupportCustomer::class, 'deleteMessage']);

// Staff/Team Endpoints
Route::post('create/staff', [StaffController::class, 'createStaff']);
Route::get('all/staff', [StaffController::class, 'getAllStaff']);
Route::get('find/staff', [StaffController::class, 'getOneStaff']);
Route::patch('update/staff', [StaffController::class, 'updateStaff']);
Route::delete('delete/staff', [StaffController::class, 'deleteStaff']);

// Certificate Endpoints
Route::post('generate/certificate', [CertificateController::class, 'generate']);
Route::get('all/certificate', [CertificateController::class, 'getAllCertificates']);
Route::get('find/certificate', [CertificateController::class, 'getOneCertificate']);
Route::patch('update/certificate', [CertificateController::class, 'updateCertificate']);
Route::delete('delete/certifiate', [CertificateController::class, 'deleteCertificate']);
