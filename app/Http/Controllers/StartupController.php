<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\FrsUser;
use App\Models\Startup;
use App\Models\TeamMember;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStartupRequest;
use App\Http\Requests\UpdateStartupRequest;

class StartupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamMembers = TeamMember::all()->groupBy('team_id');

        // Buat array kosong untuk menyimpan data tim dan anggota
        $data = [];

        // Loop untuk setiap tim
        foreach ($teamMembers as $teamId => $members) {
            // Cek apakah tim dengan ID tersebut ada dalam startup
            $startup = Startup::whereHas('team', function ($query) use ($teamId) {
                $query->where('id', $teamId);
            })->with('owner')->first();

            if ($startup) {
                // Ambil nama tim berdasarkan team_id
                $teamName = Team::where('id', $teamId)->value('name_team');

                // Ambil anggota tim dengan ID yang sama
                $anggotaTim = $members->pluck('user_id')->toArray();

                // Query untuk mendapatkan data anggota tim
                $anggota = FrsUser::whereIn('id', $anggotaTim)->with('role')->get();

                // Simpan data tim dan anggota ke dalam array
                $data[] = [
                    'team_name' => $teamName,
                    'startup_name' => $startup->startup_name,
                    'description' => $startup->description,
                    'owner_name' => $startup->owner ? $startup->owner->name : 'Belum ada ketua startup',
                    'anggota' => $anggota,
                ];
            }
        }

        // Kirim data ke view 'anggota.blade.php'
        return view('startup', compact('data'));
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
     * @param  \App\Http\Requests\StoreStartupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStartupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function show(Startup $startup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function edit(Startup $startup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStartupRequest  $request
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStartupRequest $request, Startup $startup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Startup  $startup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Startup $startup)
    {
        //
    }
}
