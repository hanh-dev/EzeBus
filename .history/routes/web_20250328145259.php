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

Route::get('/footer-demo', function () {
    return view('footer-demo');
});
Route::get('/header-demo', function () {
    return view('footer-demo');
});
