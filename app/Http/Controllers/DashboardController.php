<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Team;
use App\Models\User;
use App\Models\Startup;
use App\Models\Proposal;
use App\Models\Portfolio;
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


            // cari team_members berdasarkan user_id
            $refferal = TeamMember::where('user_id', auth()->user()->id)->first()->refferal;

            return view('pages.dashboard.team', [
                'title' => 'Dashboard Team',
                'leader' => $leader,
                'users' => $users,
                'teamName' => $teamName,
                'startup' => $startup,
                'refferal' => $refferal
            ]);
        } else {
            $teamData = Team::with('members', 'startup.owner')->get();
            return view('pages.dashboard.team', [
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
        } else {
            $nama = $startup->startup_name;
            $data['image'] = "https://api.dicebear.com/6.x/initials/svg?seed=$nama";
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

    public function proposal(){


        $data = auth()->user()->team()->with('members', 'startup.owner')->first();
        $proposal = Proposal::where('startup_id', $data->startup->id)->get();

        return view('pages.dashboard.proposal',[
            'leader' => $data->startup->owners_id,
            'portofolio' => $proposal
        ]);
    }

    public function detail_proposal($slug){
        $data = auth()->user()->team()->with('members', 'startup.owner')->first();
        $leader = $data->startup->owners_id;

        $proposal = Proposal::where('slug', $slug)->first();

        if($proposal){
            if($leader == auth()->user()->id){
                return view('pages.dashboard.proposal-update',[
                    'proposal' => $proposal
                ]);
            }else{
                abort(404);
            }
        }else{
            abort(404);
        }

    }


    public function proposal_post(Request $request){
        // $validationRules = [
        //     'judul' => ['required'],
        //     'keterangan' => ['required'],
        //     'dokumen' => ['required|file|mimes:pdf|max:10000'] // Max 10 MB and only PDF files
        // ];

        // $messages = [
        //     'judul.required' => 'Nama harus diisi.',
        //     'keterangan.required' => 'Keterangan harus diisi',
        //     'dokumen.required' => 'Dokumen tidak boleh kosong',
        //     'dokumen.file' => 'Berkas tidak valid. Hanya diperbolehkan berkas PDF.',
        //     'dokumen.max' => 'Ukuran maksimal avatar adalah 10MB.',
        // ];

        $getStartup = auth()->user()->team()->with('members', 'startup.owner')->first();
        $startupId = $getStartup->startup->id;
        $startupName = $getStartup->startup->startup_name;

        $validated = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'dokumen' => 'required|file|mimes:pdf|max:10000',
        ], [
            'judul.required' => 'Judul harus diisi.',
            'keterangan.required' => 'Keterangan harus diisi.',
            'dokumen.required' => 'Dokumen tidak boleh kosong.',
            'dokumen.file' => 'File tidak valid. Harus berupa berkas.',
            'dokumen.mimes' => 'Berkas harus dalam format PDF.',
            'dokumen.max' => 'Ukuran maksimal berkas adalah 10MB.',
        ]);

        $dokumenName = Str::slug($validated['judul'], '_') . '.' . $validated['dokumen']->extension();
        $request->file('dokumen')->move(public_path('/proposal'), $dokumenName);
        $validated['dokumen'] = "/proposal/$dokumenName";


        $validated['status'] = 'Menunggu';
        $validated['slug'] = Str::slug($validated['judul'], '-');
        $validated['startup_id'] = $startupId;

        $proposal = Proposal::create($validated);

        return redirect()->back()->with('alert', 'Proposal berhasil disubmit.');

        // $data = $request->validate($validationRules, $messages);
        // dd($data);

    }

    public function proposal_patch(Request $request,$slug){
       $proposal = Proposal::where('slug', $slug)->firstOrFail();
       $validated = $request->validate([
                'judul' => 'required',
                'keterangan' => 'required',
                'dokumen' => 'file|mimes:pdf|max:10000',
            ], [
                'judul.required' => 'Judul harus diisi.',
                'keterangan.required' => 'Keterangan harus diisi.',
                'dokumen.file' => 'File tidak valid. Harus berupa berkas.',
                'dokumen.mimes' => 'Berkas harus dalam format PDF.',
                'dokumen.max' => 'Ukuran maksimal berkas adalah 10MB.',
            ]);

        $validated['dokumen'] = $proposal->dokumen; // Simpan nama dokumen sebelumnya

        if ($request->hasFile('dokumen')) {
            $uploadedFile = $request->file('dokumen');
            $dokumenName = Str::slug($validated['judul'], '_') . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move(public_path('/proposal'), $dokumenName);
            $validated['dokumen'] = "/proposal/$dokumenName";
        }



        $validated['status'] = 'Menunggu';
        $validated['slug'] = $slug;
        $validated['startup_id'] = $proposal->startup_id;


        $proposal->update($validated);
        return redirect()->back()->with('alert', 'Proposal berhasil disubmit.');

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
