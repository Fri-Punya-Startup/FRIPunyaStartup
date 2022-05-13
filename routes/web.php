<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
    {
    PortofolioController, 
    TypeController, 
    LoginController, 
    RegisterController,
    AdminController,
    DashboardPostController
};

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
Route::get('/member' , function(){
    return view('member');
});

Route::get('/portofolio', [PortofolioController::class, 'index']);

Route::get('/portofolio/{portofolio:slug}', [PortofolioController::class, 'show']);

Route::get('/type/', [TypeController::class, 'type']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'storeRegistration']);

Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware('auth');
Route::get('/dashboard/post/createSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/admin', AdminController::class)->middleware('admin');

