<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/otp', function () {
    return view('pages.otp');
})->name('otp');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/legal-notice', function () {
    return view('pages.legal-notice');
})->name('legal-notice');

Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');

Route::get('/checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('/payment', function () {
    return view('pages.payment');
})->name('payment');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');
