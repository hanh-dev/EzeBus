<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/register', function() {
    return view('auth.register');
});

Route::get('/home', [HomeController::class, 'getHome'])->name('home');

Route::get('/login', [AuthController::class, 'getLoginForm'])->name('viewLogin');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/users', [AuthController::class, 'index']);
Route::post('/add-users', [AuthController::class, 'store']);

Route::get('/logout', function () {
    session()->forget('firebase_user');
    return redirect('/login');
});