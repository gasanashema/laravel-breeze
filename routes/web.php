<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// about route
Route::get('/about', function () {
    return view('about');
});
// contact route
Route::get('/contact', function () {
    return view('contact');
});