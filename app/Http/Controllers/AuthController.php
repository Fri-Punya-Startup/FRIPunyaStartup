<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexLogin()
    {
        return view('pages.auth.login', [
            'title' => 'Login'
        ]);
    }

    public function indexRegister()
    {
        return view('pages.auth.register', [
            'title' => 'Register'
        ]);
    }

    public function login(Request $request)
    {
        $remember = $request->remember === 'on' ? true : false;

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard.home'))
                ->with('alert', 'Anda berhasil login.');
        };

        return back()
            ->with('alert', 'Email atau password salah!');
    }
}
