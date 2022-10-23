<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Models\User;
use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Portofolio $portofolio)
    {
        // return Portofolio::all();
        return view('portofolio', [
            // 'porto' => Portofolio::all(),
            'porto' =>  $portofolio->latest()->filter(request(['search', 'type', 'founder',]))->paginate(8)->withQueryString(),
        ]);
    }

    public function show(Portofolio $portofolio){
        return view('product', [
            'porto' => $portofolio,
        ]);
    }

    public function feelsbox(){
        return view('startup.feelsbox');
    }

    public function kiri(){
        return view('startup.kiri');
    }

    public function founder(User $user){
        return view('founder', [
            'user' => $user->portofolio()->latest()->get()->load('type'),
        ]);
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
     * @param  \App\Http\Requests\StorePortofolioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortofolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortofolioRequest  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortofolioRequest $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
