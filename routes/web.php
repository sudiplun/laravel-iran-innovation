<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Slider;

Route::controller(Frontend::class)->group(function () {

    Route::get('/', 'index')
        ->name('mediplus.index');

    Route::get('/contact', 'contact')
        ->name('mediplus.contact');

    Route::get('/blog-single', 'blog')
        ->name('mediplus.blog');
});
// Route::get('/', [Slider::class, 'showSlider']);
