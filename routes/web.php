<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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