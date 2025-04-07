<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [PageController::class, 'index']);
Route::get('/', [PageController::class, 'search']);
