<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Frontend::class, 'index'])
    ->name('index');

Route::get('/contact', [Frontend::class, 'contact'])
    ->name('mediplus.contact');

Route::get('/blog-single', [Frontend::class, 'blog'])
    ->name('mediplus.blog');
