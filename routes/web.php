<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationFormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/portofolio', [PortofolioController::class, 'index']);

// Route::get('/startup/feelsbox', [PortofolioController::class, 'feelsbox']);
// Route::get('/startup/kiri', [PortofolioController::class, 'kiri']);
// Route::get('/startup/sport-gather', [PortofolioController::class, 'sport']);

Route::get('/ideaforge',  function () {
    return view('ideaforge');
});

// Route::get('/type', [TypeController::class, 'type']);

// Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('login');
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/logout', [LoginController::class, 'logout']);

// Route::resource('/register', RegistrationController::class);
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
// Route::resource('/admin', AdminController::class)->middleware('admin');
// Route::resource('/admin/user', AdminController::class)->middleware('admin');


//HomeController
// Route::group(['as' => 'home.'], function () {
//     Route::get('/', [HomeController::class, 'landingPage'])->name('landing-page');
//     Route::get('/about', [HomeController::class, 'about'])->name('about');
//     Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
//     Route::get('/team', [HomeController::class, 'team'])->name('team');
// });

Route::middleware(['guest'])->group(function () {
    //AuthController
    Route::get('/register', [AuthController::class, 'indexRegister'])->name('register.index');
    Route::get('/login', [AuthController::class, 'indexLogin'])->name('login.index');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/form', function(){
    return view('form');
});


Route::group(['as' => 'admin.'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin-home');
    // Route::get('/about', [HomeController::class, 'about'])->name('about');
    // Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    // Route::get('/team', [HomeController::class, 'team'])->name('team');
});

//Route Register
Route::resource('/register', RegistrationFormController::class);
// Route::middleware(['auth'])->group(function () {
    //DashboardController
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', [DashboardController::class, 'home'])->name('home');
        Route::get('/team', [DashboardController::class, 'team'])->name('team');
        Route::get('/startup', [DashboardController::class, 'startup'])->name('startup');
        Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    });
// });

