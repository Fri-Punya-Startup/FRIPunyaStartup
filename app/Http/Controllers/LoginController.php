<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Models\User;

class LoginController extends Controller{

    public function showLoginForm(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            
            if(Auth::user()->verifikasi == null){
                Auth::logout();
                return back()->with('akunError', 'Akun Anda Belum Terverifikasi');
            }
            
            $request->session()->regenerate();
            
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            }else{
                return redirect('/dashboard');
            }
        }

        return back()->with('loginError', 'Email or password is incorrect');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

}