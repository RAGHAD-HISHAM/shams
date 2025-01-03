<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;



// Authentication Routes (provided by Laravel UI)
Auth::routes();


// // Admin Routes (protected by auth middleware)
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard');
//     Route::resource('admin/books', BookController::class);
//     Route::resource('admin/users', UserController::class);
//     // Other admin routes...
// });


// // Site Routes
// Route::get('/', [SiteBookController::class, 'index'])->name('home');
// Route::resource('books', SiteBookController::class)->only(['index', 'show']);

Route::get('/', function () {
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/about', function () {
    return view('site.about');
});
Route::get('/membership', function () {
    return view('site.membership');
});
Route::get('/profile', function () {
    return view('site.profile');
});

// Route::get('/category', function () {
//     return view('admin.catagory.index');
// });
Route::get('/books', function () {
    return view('admin.books.index');
});

Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class);
Route::get('/', [Controller::class, 'landingPage'])->name('landing');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
