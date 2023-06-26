<?php

use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomePageController::class, "HomePage"]);

// Sending email routes
Route::post('contact_mail',[HomePageController::class, 'contact_mail_send']);

// Download CV routes

Route::get('/download-cv',[DownloadController::class,'downloadCV'])->name('download.cv');


