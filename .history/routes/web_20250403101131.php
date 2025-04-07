<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PageController::class, 'index']);
Route::get('/search', [PageController::class, 'index'])->name('search');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/dich-vu', [PageController::class, 'dichvu'])->name('dichvu');
Route::get('/news',[PageController::])
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
