<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/package-tests', function () {
    return view('package-tests');
})->name('package-tests');

Route::get('/documentation', function () {
    return view('documentation');
})->name('documentation');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');
