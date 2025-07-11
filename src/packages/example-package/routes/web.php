<?php

use Illuminate\Support\Facades\Route;

Route::get('/example-package', function () {
    return view('example-package::welcome');
})->name('example-package.welcome'); 