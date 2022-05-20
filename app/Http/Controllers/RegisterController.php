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
            'email' => 'required',
            'password' => 'required|string|min:6',
            'role' => 'required',
        ]);
        
        if($validate['role'] == 'Pilih'){
            return redirect()->back()->withErrors(['role' => 'Pilih Role Terlebih Dahulu']);
        }

        $validate['password'] = Hash::make($validate['password']);

        // return $validate;
        User::create($validate);

        $request->session()->flash('success', 'Berhasil mendaftar');

        return redirect('/login');
    }

}