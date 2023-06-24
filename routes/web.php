<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationFormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


//HomeController
Route::group(['as' => 'home.'], function () {
    Route::get('/', [HomeController::class, 'landingPage'])->name('landing-page');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    Route::get('/team', [HomeController::class, 'team'])->name('team');
});

Route::middleware(['guest'])->group(function () {
    //AuthController
    Route::get('/register', [AuthController::class, 'indexRegister'])->name('register.index');
    Route::get('/login', [AuthController::class, 'indexLogin'])->name('login.index');
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

