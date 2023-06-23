<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexLogin() {
        return view('pages.auth.login', [
            'title' => 'Login'
        ]);
    }

    public function indexRegister() {
        return view('pages.auth.register', [
            'title' => 'Register'
        ]);
    }
}
