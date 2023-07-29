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
    public function index () {
        return view ('registration');
    }

    public function store(Request $request) {
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


        if($validated['refferal'] && $teamMember) {
            $user = User::create([
                'email' => $validated['email'],
                'name' => $validated['fullName'],
                'password' => bcrypt($validated['password']),
                'phone' => $validated['number'],
                'role_id' => $validated['role'],
            ]);

            $newTeamMember = TeamMember::create([
                'team_id' => $teamMember->team_id,
                'user_id' => $user->id,
                'refferal' => $validated['refferal'],
            ]);

            return redirect('login')->with('success', 'Selamat! Akun Anda berhasil didaftarkan, dan Anda telah resmi menjadi bagian dari tim kami. Selamat datang di tim! 🎉');
        }else {
            if($isStartup){
                $user = User::create([
                    'email' => $validated['email'],
                    'name' => $validated['fullName'],
                    'password' => bcrypt($validated['password']),
                    'phone' => $validated['number'],
                    'role_id' => $validated['role'],
                ]);
                return redirect('login')->with('success', 'Selamat! Akun Anda berhasil didaftarkan. Startup Anda sudah terdaftar di platform kami. Terima kasih!');
            }elseif($validated['startup']) {
                $user = User::create([
                    'email' => $validated['email'],
                    'name' => $validated['fullName'],
                    'password' => bcrypt($validated['password']),
                    'phone' => $validated['number'],
                    'role_id' => $validated['role'],
                ]);
    
                $startup = Startup::create([
                    'owners_id' => $user->id,
                    'startup_name' => $validated['startup'],
                    'description' => $validated['deskripsi'],
                ]);
                $randomString = strtoupper(Str::random(8));
                $teamSave = $startup->team()->create(['name_team' => $validated['startup']." Team"]);
                $teamSave->members()->attach($user->id, ['refferal' => $randomString]);
                // Tampilkan pop-up dengan kode referral
                echo "<script>";
                echo "var referralCode = '{$randomString}';";
                echo "var popupContent = 'Silahkan undang teman anda menggunakan kode ini : ' + referralCode;";
                echo "alert(popupContent);";
                echo "</script>";
                
            }else{
                $user = User::create([
                    'email' => $validated['email'],
                    'name' => $validated['fullName'],
                    'password' => bcrypt($validated['password']),
                    'phone' => $validated['number'],
                    'role_id' => $validated['role'],
                ]);
                return redirect('login')->with('success', 'Selamat! Akun Anda berhasil didaftarkan 🎉');
            }
        }


    }
}
