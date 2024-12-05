<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about-us', function () {
    return view('about-us');
});

Route::get('services', function () {
    return view('services');
});

Route::get('portfolio', function () {
    return view('portfolio');
});

Route::get('contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');