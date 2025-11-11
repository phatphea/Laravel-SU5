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