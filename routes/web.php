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
//
// Route::post('', 'AppointmentController@strore')->name('appointments.store');
//
Route::get('/send', [MailController::class, 'index']);

Route::post('/newsletter', function () {
    request()->validate(['email', 'required|email']);
    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us21',
    ]);

    $response = $mailchimp->lists->addListMember('917499b476', [
        'email_address' => request('email'),
        'status' => 'subscribed',
    ]);

    return redirect('/')->with('success', 'you have subscribed newsletter successfully.');
});
