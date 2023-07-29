<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Team;
use App\Models\User;
use App\Models\Startup;
use App\Models\TeamMember;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        $team = $user->team()->with('members', 'startup.owner')->first();
        
        if ($team) {
            $teamName = $team->name_team;
            $startup = $team->startup;
            // Get the leader from the startup's owner
            $leader = $startup->owner;
            // Get all team members, including the leader
            $users = $team->members;
            
            return view('pages.dashboard.home', [
                'title' => 'Dashboard Home',
                'leader' => $leader,
                'users' => $users,
                'teamName' => $teamName,
                'startup' => $startup
            ]);
        } else {
            $teamData = Team::with('members', 'startup.owner')->get();
    
            return view('pages.dashboard.home', [
                'title' => 'Dashboard Home',
                'team' => $teamData
            ]);
        }

    }
    
    public function team()
    {
        $user = Auth::user();
        $team = $user->team()->with('members', 'startup.owner')->first();
    
        if ($team) {
            $teamName = $team->name_team;
            $startup = $team->startup;
            // Get the leader from the startup's owner
            $leader = $startup->owner;
            // Filter the leader from the users
            $users = $team->members->reject(function ($member) use ($leader) {
                return $member->name === $leader->name;
            });
    
            return view('pages.dashboard.team', [
                'title' => 'Dashboard Team',
                'leader' => $leader,
                'users' => $users,
                'teamName' => $teamName,
                'startup' => $startup
            ]);
        } else {
            $teamData = Team::with('members', 'startup.owner')->get();
    
            return view('pages.dashboard.teamcopy', [
                'title' => 'Dashboard Team',
                'team' => $teamData
            ]);
        }
    }

    public function startup()
    {
        //N+1 PROBLEM. TOLONG RELASI DIPERBAIKI LAGI, TABLE TEAM_MEMBER SEHARUSNYA TIDAK PERLU KARENA AKAN MENYUSAKAN PENGAMBILAN DATA KE DATABASE. UNTUK SEMENTARA GINI AJA DULU KARENA WAKTU MEPET.
        //Relasi udah dibenerin bang mungkin untuk mengatasi N+1 bisa menggunakan eagerloading
        $team_member = TeamMember::where('user_id', auth()->user()->id)->first();
        $team = Team::findOrFail($team_member->team_id);
        $startup = Startup::findOrFail($team->startup_id);
        return view('pages.dashboard.startup', [
            'title' => 'Dashboard Startup',
            'startup' => $startup,
        ]);
    }

    public function startup_patch(Request $request)
    {
        $team_member = TeamMember::where('user_id', auth()->user()->id)->first();
        $team = Team::findOrFail($team_member->team_id);
        $startup = Startup::findOrFail($team->startup_id);

        if (auth()->user()->id !== $startup->owners_id) {
            return redirect()->back()->with('alert', 'Hanya pemilik startup yang dapat mengubah data startup.');
        }

        $rules = [
            'startup_name' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'file', 'max:2000'],
        ];

        $messages = [
            'startup_name.required' => 'Nama startup harus diisi.',
            'description.required' => 'Deskripsi startup harus diisi.',
            'image.image' => 'Logo harus berupa gambar.',
            'image.file' => 'Logo tidak valid.',
            'image.max' => 'Ukuran maksimal logo adalah 2MB.',
        ];

        $data = $request->validate($rules, $messages);

        if ($request->image) {
            if ($startup->image) {
                try {
                    unlink(public_path($startup->image));
                } catch (Exception $e) {
                    //do nothing
                }
            }
            $image = Str::random(32) . '.' . $data['image']->extension();
            $request->file('image')->move(public_path('/images/startup_logo'), $image);
            $data['image'] = "/images/startup_logo/$image";
        }

        $startup->update($data);

        return redirect()->back()->with('alert', 'Startup berhasil diupdate.');
    }
    

    public function profile()
    {
        return view('pages.dashboard.profile', [
            'title' => 'Dashboard Profile'
        ]);
    }

    public function profile_patch(Request $request)
    {
        $rules = [
            'name' => ['required'],
            'avatar' => ['image', 'file', 'max:2000'],
        ];

        $messages = [
            'name.required' => 'Nama harus diisi.',
            'avatar.image' => 'Avatar harus berupa gambar.',
            'avatar.file' => 'Avatar tidak valid.',
            'avatar.max' => 'Ukuran maksimal avatar adalah 2MB.',
        ];

        if ($request->password) {
            $rules['password'] = ['min:8'];
            $messages['password.min'] = 'Password minimal 8 karakter.';
        }

        $data = $request->validate($rules, $messages);

        if ($request->avatar) {
            if (auth()->user()->avatar) {
                try {
                    unlink(public_path(auth()->user()->avatar));
                } catch (Exception $e) {
                    //do nothing
                }
            }
            $avatar = Str::random(32) . '.' . $data['avatar']->extension();
            $request->file('avatar')->move(public_path('/images/avatars'), $avatar);
            $data['avatar'] = "/images/avatars/$avatar";
        }

        $request->password ? $data['password'] = bcrypt($data['password']) : null;

        User::find(auth()->user()->id)->update($data);

        return redirect()->back()->with('alert', 'Profile berhasil diupdate.');
    }

    public function joinTeam(Request $request)
    {
        // $validated = $request->validate([

        // ]);
        $refferal = $request->input('refferal');
        $cekRefferal = TeamMember::where('refferal', $refferal)->first();

        if ($cekRefferal) {
            $count = TeamMember::where('team_id', $cekRefferal->team_id)->count();

            if ($count < 4) {
                $user = Auth::user();

                $newTeamMember = TeamMember::create([
                    'team_id' => $cekRefferal->team_id,
                    'user_id' => $user->id,
                    'refferal' => $refferal,
                ]);

                return "anda berhasil join team silahkan refresh";
            } else {
                return "Team sudah penuh.";
            }
        } else {
            return "Kode yang anda masukan salah.";
        }
    }
}
