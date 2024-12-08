<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/LoginPage', [UserController::class, 'Login'])->name('Login.index');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.submit');

Route::get('/RegisterPage/create', [UserController::class, 'create'])->name('Register.create');
Route::post('/RegisterPage/register', [UserController::class, 'register'])->name('Register.register');

Route::get('/userHomePage', [UserController::class, 'userHome'])->name('user.home')->middleware('auth');

Route::get('/about', [UserController::class, 'userAbout'])->name('user.about');

// Route::get('/profile/{user}', [UserController::class, 'userProfile'])->name('user.profile');
// Route::put('/update/{user}', [UserController::class, 'updateProfile'])->name('user.update');
