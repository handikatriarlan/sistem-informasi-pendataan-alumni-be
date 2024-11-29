<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::get('/alumni', function () {
    return view('front.alumni');
});

Route::get('/login', function () {
    return view('front.login');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/profile', function () {
    return view('front.profile');
});
