<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/register', [AuthController::class, 'showRegistration'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/adminDashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');
    Route::get('/admin/adminProduct', [AdminController::class, 'product'])
        ->name('admin.product');
    Route::post('/admin/add-product', [AdminController::class, 'addproduct'])
        ->name('admin.Addproduct');

    Route::post('/admin/update-product', [AdminController::class, 'updateproduct'])
        ->name('admin.Updateproduct');
    Route::post('/admin/delete-product', [AdminController::class, 'deleteProduct'])
        ->name('admin.Deleteproduct');
});

