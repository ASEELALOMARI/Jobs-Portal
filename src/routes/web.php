<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobDetailsController;
use App\Http\Controllers\JobListingsController;
use App\Http\Controllers\ArHomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/en-home', function () {
    return view('index');
})->name('EN');

Route::get('/about', [AboutController::class,'index'])->name('EN.about');

Route::get('/contact', [ContactController::class,'index'])->name('EN.contact');

Route::get('/job-details', [JobDetailsController::class,'index'])->name('EN.job-details');

Route::get('/job-listings', [JobListingsController::class, 'index'])->name('EN.job-listings');



Route::get('/ar-home', [ArHomeController::class, 'index'])->name('AR');
Route::get('/ar-about', function(){return view('arabic.about');})->name('AR.about');
Route::get('/ar-contact', function(){return view('arabic.contact');})->name('AR.contact');
Route::get('/ar-job-details', function(){return view('arabic.job-details');})->name('AR.job-details');
Route::get('/ar-job-listings', function(){return view('arabic.job-listings');})->name('AR.job-listings');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
