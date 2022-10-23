<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
    {
    PortofolioController, 
    TypeController, 
    LoginController, 
    AdminController,
    EventController,
    DashboardPostController,
    RegistrationController,
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

Route::get('/startup/feelsbox', [PortofolioController::class, 'feelsbox']);
Route::get('/startup/kiri', [PortofolioController::class, 'kiri']);

Route::get('/type/', [TypeController::class, 'type']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::resource('/register', RegistrationController::class);
// Route::get('/event', [EventController::class, 'indexPublic']);
// Route::get('/register-event/{event:slug}', [EventController::class, 'showRegistrationForm']);
// Route::post('/register-event/{event:slug}', [EventController::class, 'peopleRegisterEvent']);

// Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware('auth');
// Route::get('/dashboard/post/createSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard/post', DashboardPostController::class)->middleware('auth');
// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::post('/wa/acc', [waController::class, 'acc']);
// Route::post('/wa/regist-event', [waController::class, 'konfirmasi']);

// Route::get('/admin/member', [AdminController::class, 'member'])->middleware('admin');
// Route::get("/admin/edit-member/{id}", [AdminController::class, 'editMember'])->middleware('admin');
// Route::put("/admin/edit-member/{id}", [AdminController::class, 'naikPangkat'])->middleware('admin');
// Route::get('/admin/register-akun', [AdminController::class, 'registerAkun'])->middleware('admin');
// Route::get('/admin/type', [AdminController::class, 'type'])->middleware('admin');
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::resource('/admin/user', AdminController::class)->middleware('admin');
