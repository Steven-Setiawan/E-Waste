<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/LoginPage', [UserController::class, 'Login'])->name('Login.index');

Route::get('/RegisterPage/create', [UserController::class, 'create'])->name('Register.create');
Route::post('/RegisterPage/register', [UserController::class, 'register'])->name('Register.register');
