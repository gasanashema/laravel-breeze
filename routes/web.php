<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'title' => 'Manager',
                'salary' => '$40,000'
            ],
            [
                'title' => 'Engineer',
                'salary' => '$30,000'
            ]
        ]
    ]);
});
// about route
Route::get('/about', function () {
    return view('about');
});
// contact route
Route::get('/contact', function () {
    return view('contact');
});