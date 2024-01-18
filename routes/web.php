<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;

Route::controller(Frontend::class)->group(function () {

    Route::get('/', 'index')
        ->name('mediplus.index');

    Route::get('/contact', 'contact')
        ->name('mediplus.contact');

    Route::get('/blog-single', 'blog')
        ->name('mediplus.blog');
});
