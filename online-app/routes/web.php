<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontcontroller;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;


Route::get('/', [Homecontroller::class, 'index'])->name('home.index');
Route::get('/home', [Homecontroller::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact.index');
Route::post('/contact', [HomeController::class, 'store'])
    ->name('contact.store');


Route::get('/about', [Frontcontroller::class, 'about'])->name('about.index');
Route::get('/apply', [Frontcontroller::class, 'apply'])->name('apply.index');


Route::middleware(['auth'])->group(function () {


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy']) ->name('profile.destroy');
});

// Contact Page
Route::get('/contact', [HomeController::class, 'contact'])
    ->name('contact.index');

// Save Contact Message
Route::post('/contact', [MessageController::class, 'store'])
    ->name('contact.store');

// Admin Message List
Route::get('/messages', [MessageController::class, 'index'])
    ->name('messages.index');

// Show Message
Route::get('/messages/{id}', [MessageController::class, 'show'])
    ->name('messages.show');

// Delete Message
Route::delete('/messages/{id}', [MessageController::class, 'destroy'])
    ->name('messages.destroy');





Route::get('/dashboard', [UserController::class, 'dashboard'])
    ->middleware(['auth'])
    ->name('dashboard');
    
{

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
}

{
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
}
{
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
}

{
Route::get('/application', [ApplicationController::class, 'index'])->name('application.index');
Route::get('/application/create', [ApplicationController::class, 'create'])->name('application.create');
Route::post('/application', [ApplicationController::class, 'store'])->name('application.store');   
Route::put('/application/{id}', [ApplicationController::class, 'update'])->name('application.update');
Route::delete('/application/{id}', [ApplicationController::class, 'destroy'])->name('application.destroy');
Route::get('/application/{id}', [ApplicationController::class, 'show'])->name('application.show');
}
Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::post('/company', [CompanyController::class, 'store'])->name('company.store');
Route::get('/company/{id}/edit', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/{id}', [CompanyController::class, 'update'])->name('company.update');
Route::delete('/company/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
Route::get('/company/{id}/logo', [CompanyController::class, 'logoView'])->name('company.logo');
{

Route::get('/lang/{locale}', function ($locale) {

    if (in_array($locale, ['en', 'np'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
   
}
Route::get('fontend/jobs/details/{id}', [Frontcontroller::class, 'jobDetails'])->name('job.details');
Route::get('/search', [userController::class, 'search'])
    ->name('search');
require __DIR__.'/auth.php';