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
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogPost'])->name('blog.post');
Route::get('/blog/category/{category}', [PageController::class, 'blogCategory'])->name('blog.category');
Route::get('/blog/tag/{tag}', [PageController::class, 'blogTag'])->name('blog.tag');
Route::get('/blog/archive/{year}/{month}', [PageController::class, 'blogArchive'])->name('blog.archive');
Route::get('/blog/search', [PageController::class, 'blogSearch'])->name('blog.search');
