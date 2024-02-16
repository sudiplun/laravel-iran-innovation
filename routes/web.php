<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::controller(Frontend::class)->group(function () {

    Route::get('/', 'index')
        ->name('mediplus.index');

    Route::get('/contact', 'contact')
        ->name('mediplus.contact');

    Route::get('/blog-single', 'blog')
        ->name('mediplus.blog');
});
Route::post('', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/send', [MailController::class, 'index']);
