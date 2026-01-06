<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// About Page
Route::get('/about', function () {
    return view('about');
});

// Services Page
Route::get('/services', function () {
    return view('services');
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/', function () {
//     return "Home page";
// });

// Route::get('/movie/{year?}', function ($year=null) {
//     $today = date("Y");
//     if($year == null){
//         return "Movies released in the year: $today";
//     }
//     return "Movies released in the year: " . $year;
// });

// Route::get('/welcome', function () {
//     return "Hello from Welcome page";
// });
    