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

// Ini adalah route untuk navbar 
Route::get('/', function () {
    return view('navbar/home');
});

Route::get('/home', function () {
    return view('navbar/home');
});

Route::get('/about', function () {
    return view('navbar/about');
});

Route::get('/contact', function () {
    return view('navbar/contact');
});

Route::get('/doctor', function () {
    return view('navbar/doctor');
});
