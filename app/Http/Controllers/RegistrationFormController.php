<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationFormController extends Controller
{
    //view register
    public function index(){
        return view ('register');
    }

    public function store(Request $request){
        //validation form
        $validated = $request->validate([
           
        ]);

        //replace 0 menjadi kode nomer 62
        if (substr($validated['no_hp'], 0, 1) === "0") {
            $validated['no_hp'] = "62". substr($validated['no_hp'], 1);
        }

       

        //save data ke database yang sudah divalidasi
        $register = Registration::create([
            
        ]);

        //message success
        if($register){
            Session::flash('status','success');
            Session::flash('message', 'Selamat !');
        }

        //return view('');         


    }

    public function show($id)
    {
        // Logika untuk menampilkan detail registrasi berdasarkan ID
    }

    public function edit($id)
    {
        // Logika untuk menampilkan formulir pengeditan registrasi berdasarkan ID
    }

    public function update(Request $request, $id)
    {
        // Logika untuk memperbarui data registrasi berdasarkan ID
    }

    public function destroy($id)
    {
        // Logika untuk menghapus registrasi berdasarkan ID
    }
}
