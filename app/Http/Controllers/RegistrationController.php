<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Startup;
use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
/**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Flare, Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     */

    public function index () {
        return view ('registration');
    }

    public function store(Request $request) {

        // random number 1 - 999
        $randomNumber = rand(1, 999);
        $image = "https://api.dicebear.com/6.x/avataaars/png?seed=$randomNumber&backgroundColor=b6e3f4,c0aede,d1d4f9,ffdfbf,ffd5dc&backgroundType=gradientLinear&accessoriesProbability=25";

        $validated = $request->validate([
            'email' => 'required|unique:users|email',
            'fullName' => 'required',
            'password' => 'required',
            'number' => 'required',
            'role' => 'required',
            'startup' => 'nullable',
            'deskripsi' => 'nullable',
            'refferal' => 'nullable'
        ]);

        $role = Role::find($validated['role']);
        $isStartup = Startup::where('startup_name', $validated['startup'])->first();
        $teamMember = TeamMember::where('refferal', $validated['refferal'])->first();

        if($isStartup){
            return back()->with('error', 'Nama startup sudah terdaftar');
        }

        // jika validate referal atau validate startup kosong maka back error
        if($validated['refferal'] == null && $validated['startup'] == null) {
            return back()->with('error', 'Nama startup atau kode refferal harus diisi');
        }

        if($validated['startup']){
            $user = User::create([
                'email' => $validated['email'],
                'name' => $validated['fullName'],
                'password' => bcrypt($validated['password']),
                'phone' => $validated['number'],
                'role_id' => $validated['role'],
                'avatar' => $image,
            ]);

            $startupName = $validated['startup'];

            $startup = Startup::create([
                'owners_id' => $user->id,
                'startup_name' => $validated['startup'],
                'description' => $validated['deskripsi'],
                "image" => "https://api.dicebear.com/6.x/initials/svg?seed=$startupName"
            ]);
            $randomString = strtoupper(Str::random(8));
            $teamSave = $startup->team()->create(['name_team' => $validated['startup']." Team"]);
            $teamSave->members()->attach($user->id, ['refferal' => $randomString]);
            // auto atempt auth
            auth()->attempt($request->only('email', 'password'));

            return back()->with('success', $randomString);
        }

        if(!$teamMember){
            return back()->with('error', 'Kode refferal tidak ditemukan');
        }

        if($validated['refferal'] && $teamMember) {

            // jika sudah maksimal 4 teammember nya maka return error
            if($teamMember->team->members->count() >= 4) {
                return back()->with('error', 'Kode refferal sudah mencapai batas maksimal');
            }

            $user = User::create([
                'email' => $validated['email'],
                'name' => $validated['fullName'],
                'password' => bcrypt($validated['password']),
                'phone' => $validated['number'],
                'role_id' => $validated['role'],
                'avatar' => $image,
            ]);

            TeamMember::create([
                'team_id' => $teamMember->team_id,
                'user_id' => $user->id,
                'refferal' => $validated['refferal'],
            ]);

            auth()->attempt($request->only('email', 'password'));

            return redirect('dashboard')->with('success', 'Selamat! Akun Anda berhasil didaftarkan, dan Anda telah resmi menjadi bagian dari tim kami. Selamat datang di tim! 🎉');
        }
    }
}
