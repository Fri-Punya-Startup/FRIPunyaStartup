<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PortofolioController, TypeController};

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

Route::get('/portofolio', [PortofolioController::class, 'index']);

Route::get('/portofolio/{portofolio:product}', [PortofolioController::class, 'show']);

Route::get('/type/{type:name}', [TypeController::class, 'type']);