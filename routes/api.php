<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppoimentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('doctor', DoctorController::class);
Route::resource('appoiment', AppoimentController::class);
Route::post('/doctor/filter', [DoctorController::class, 'filterDoctor']);
Route::post('/appoiment/get-appoiments', [AppoimentController::class, 'getAppoimentByDoctor']);
Route::post('/appoiment/make-appoiments', [AppoimentController::class, 'makeAppoiment']);
