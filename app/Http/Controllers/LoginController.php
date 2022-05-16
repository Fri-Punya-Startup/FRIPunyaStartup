<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $request->session()->regenerate();

            if(Auth::user()->name == 'wahyu'){
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