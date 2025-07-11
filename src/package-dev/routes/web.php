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

// Language switcher routes
Route::languageSwitcher();

// Language switcher API routes
Route::languageSwitcherApi();

// Test API endpoints
Route::get('/test-api', function () {
    return response()->json([
        'message' => 'API is working',
        'current_language' => app()->getLocale(),
        'supported_languages' => config('language-switcher.supported_languages'),
    ]);
});
