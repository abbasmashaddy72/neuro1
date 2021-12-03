<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage');
})->name('home');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('blogs');

Route::get('/blogs-details', function () {
    return view('pages.blogs-details');
})->name('blogs-details');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/services-details', function () {
    return view('pages.services-details');
})->name('services-details');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
