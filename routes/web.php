<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\JobListingController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ApplicationController as FrontendApplicationController;

Route::get('/', [HomeController::Class, 'index'])->name('home');
Route::resource('applications', FrontendApplicationController::Class)->only(['store']);

Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {

Route::get('/dashboard', [AdminController::Class, 'dashboard'])->name('dashboard');
Route::resource('companies', CompanyController::Class);
Route::resource('applications', ApplicationController::Class);
Route::resource('joblistings', JobListingController::Class);

});

require __DIR__.'/auth.php';
