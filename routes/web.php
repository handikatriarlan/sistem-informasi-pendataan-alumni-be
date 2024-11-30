<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('/alumni', function () {
    return view('front.alumni');
});

// Route::get('/login', function () {
//     return view('front.login');
// });

// Route::get('/register', function () {
//     return view('front.register');
// });

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/event', function () {
    return view('front.event');
});

Route::get('/profile', function () {
    return view('front.profile');
});

require __DIR__.'/auth.php';
