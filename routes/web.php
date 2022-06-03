<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
    {
    PortofolioController, 
    TypeController, 
    LoginController, 
    RegisterController,
    AdminController,
    EventController,
    DashboardPostController,
    waController
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

Route::get("/about", function () {
    return view('about');
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

Route::get('/event', [EventController::class, 'indexPublic']);
Route::get('/register-event/{event:slug}', [EventController::class, 'showRegistrationForm']);

Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware('auth');
Route::get('/dashboard/post/createSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::post('/wa/acc', [waController::class, 'acc']);
Route::post('/wa/regist-event', [waController::class, 'konfirmasi']);

Route::get('/admin/member', [AdminController::class, 'member'])->middleware('admin');
Route::get("/admin/edit-member/{id}", [AdminController::class, 'editMember'])->middleware('admin');
Route::put("/admin/edit-member/{id}", [AdminController::class, 'naikPangkat'])->middleware('admin');
Route::get('/admin/register-akun', [AdminController::class, 'registerAkun'])->middleware('admin');
Route::get('/admin/type', [AdminController::class, 'type'])->middleware('admin');
Route::resource('/admin', EventController::class)->middleware('admin');