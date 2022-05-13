<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller{

    public function showRegistrationForm(){
        return view('register');
    }

    public function storeRegistration(Request $request){
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string',
        ]);
        
        $validate['password'] = Hash::make($validate['password']);

        // return $request->all();
        User::create($validate);

        $request->session()->flash('success', 'Berhasil mendaftar');

        return redirect('/login');
    }

}