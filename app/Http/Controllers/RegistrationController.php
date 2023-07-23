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
            'startup' => 'required',
            'deskripsi' => 'nullable',
            'refferal' => 'nullable'
        ]);

        $role = Role::find($validated['role']);
        $isStartup = Startup::where('startup_name', $validated['startup'])->first();


        if ($isStartup) {
            if ($validated['refferal'] != null) {

                $user = User::create([
                    'email' => $validated['email'],
                    'name' => $validated['fullName'],
                    'password' => bcrypt($validated['password']),
                    'phone' => $validated['number'],
                    'role_id' => $validated['role'],
                ]);

                $teamMember = TeamMember::where('refferal', $validated['refferal'])->first();
                
                $newTeamMember = TeamMember::create([
                    'team_id' => $teamMember->team_id,
                    'user_id' => $user->id,
                    'refferal' => $validated['refferal'],
                ]);

                return "Berhasil mendaftarkan akun, Berhasil masuk ke team";

            } else {

             $user = User::create([
                'email' => $validated['email'],
                'name' => $validated['fullName'],
                'password' => bcrypt($validated['password']),
                'phone' => $validated['number'],
                'role_id' => $validated['role'],
            ]);
            return "Berhasil mendaftarkan akun, Anda Mendaftar tanpa kode refferal";
        }

         } else {
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
         }
        
        
    }
}
