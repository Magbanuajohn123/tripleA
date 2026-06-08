<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('user.login');
});
Route::get('/register', [UserController::class, 'showRegister']);
Route::post('/register', [UserController::class, 'register']);
