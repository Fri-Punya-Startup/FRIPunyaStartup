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
    return view('home');
});

Route::get('/contoh', function () {
    return view('contoh');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/coming-soon', function () {
    return view('coming');
}); 

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});