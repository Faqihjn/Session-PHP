<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/create', [HomeController::class, 'create']);


Route::get('navbar/about', function () {
    return view('navbar/about');
});

Route::get('navbar/contact', function () {
    return view('navbar/contact');
});

Route::get('navbar/doctor', function () {
    return view('navbar/doctor');
});

Route::get('/home', function () {
    return view('index');
});