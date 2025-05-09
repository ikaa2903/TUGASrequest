<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\ContactController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/contact/create', [ContactController::class, 'create'])->name('Contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('Contact.store');

Route::get('/', [UserController::class, 'create']) ->name('user.create');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
