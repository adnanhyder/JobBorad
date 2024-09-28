<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JobController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\AboutController;


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
    return view('front.index');
});

Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware('front')->name('dashboard');

Route::middleware('front')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('about',[AboutController::class,"about"])->name("about");
Route::get('contact',[ContactController::class,"contact"])->name("contact");
Route::get('detail',[JobController::class,"jobDetail"])->name("jobDetail");


Route::get('job-categories',[JobController::class,"jobCategories"])->name("jobCategories");
Route::get('add-job-category',[JobController::class,"addJobCategory"])->name("addJobCategory");
Route::post('create-job-category',[JobController::class,"createJobCategory"])->name("createJobCategory");


Route::get('add-job',[JobController::class,"addJob"])->name("addJob");
Route::post('create-job',[JobController::class,"createJob"])->name("createJob");
Route::get('job-list',[JobController::class,"JobList"])->name("jobList");
Route::get('job-detail/{id}',[JobController::class,"jobDetail"])->name("jobDetail");







require __DIR__.'/front_auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');


require __DIR__.'/auth.php';
