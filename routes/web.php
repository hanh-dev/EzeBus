<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/home', function () {
    return view('welcome');
});

Route::get('/bus_detail', function(){
    return view ('pages.bus_detail');
});
Route::get('/bus', function(){
    return view ('pages.bus');
});
Route::get('/payment', function(){
    return view ('pages.payment');
});
Route::get('/passenger',function(){
    return view ('pages.passenger_details');
});

Route::get('/home', [PageController::class, 'index']);
Route::get('/search', [PageController::class, 'index'])->name('search');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/dich-vu', [PageController::class, 'dichvu'])->name('dichvu');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{id}', [PageController::class, 'show'])->name('show');
Route::get('/header-demo', function () {
    return view('header-demo');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/test-home', function () {
    return view('home-test');
});
Route::get('/gioi-thieu', function () {
    return view('gioithieu');
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

