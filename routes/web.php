<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ICPServiceController;

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

Route::get('/', [ICPServiceController::class, 'getAllICP_frontend']);
Route::post('/create/service', [ICPServiceController::class, 'createICP']);
Route::get('all/services/', [ICPServiceController::class, 'getAllICP']);
Route::get('/services', [ICPServiceController::class, 'getDashboard']);


