<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegistrationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegistrationRequest $request)
    {
        // validasi data
        
        $validated = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "no_hp" => "required|numeric",
            "alasan" => "required",
            "harapan" => "required",
            "role" => "required",
            "skill" => "required",
            "startup" => "required",
            "cv" => "required|mimes:pdf",
            "follow" => "required",
        ]); 

        // upload file
        $cv = $request->file('cv');
        $cvName = $validated['name'] . '-' . time() . '.' . $cv->extension();
        $cv->storeAs('cv', $cvName);

        // save data
        Registration::create([
            "name" => $validated['name'],
            "email" => $validated['email'],
            "no_hp" => $validated['no_hp'],
            "alasan" => $validated['alasan'],
            "harapan" => $validated['harapan'],
            "role" => $validated['role'],
            "skill" => $validated['skill'],
            "startup" => $validated['startup'],
            "cv" => $cvName,
            "follow" => $validated['follow'],
        ]);

        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegistrationRequest  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
