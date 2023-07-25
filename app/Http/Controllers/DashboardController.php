<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Startup;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home() {
        $user = Auth::user();
        $cekUserTeam = TeamMember::where('user_id', $user->id)->first();

        if($cekUserTeam){
            $teamId = $cekUserTeam->team_id;
            $usersWithSameTeam = TeamMember::where('team_id', $teamId)->pluck('user_id');
            $users = User::whereIn('id', $usersWithSameTeam)
                    ->with('role:id,name')
                    ->get(['id', 'name', 'role_id']);

            $teamName = Team::join('teams_members', 'teams_members.team_id', '=', 'teams.id')
                ->where('teams_members.team_id', $teamId)
                ->value('teams.name_team');


            $team = Team::findOrFail($teamId);
            $startup = Startup::findOrFail($team->startup_id);



            return view('pages.dashboard.home', [
                'title' => 'Dashboard Team',
                'users' => $users,
                'teamName' => $teamName,
                'startup' => $startup
            ]);
        }else {
            $allTeam = Team::all();

            return view('pages.dashboard.home', [
                'title' => 'Dashboard Team',
                'team' => $allTeam
            ]);
        }
    }
    public function team() {

        $user = Auth::user();
        $cekUserTeam = TeamMember::where('user_id', $user->id)->first();

        if($cekUserTeam){
            $teamId = $cekUserTeam->team_id;
            $usersWithSameTeam = TeamMember::where('team_id', $teamId)->pluck('user_id');
            $users = User::whereIn('id', $usersWithSameTeam)->pluck('name');

            $teamName = Team::join('teams_members', 'teams_members.team_id', '=', 'teams.id')
                ->where('teams_members.team_id', $teamId)
                ->value('teams.name_team');

            $team = Team::findOrFail($teamId);
            $startup = Startup::findOrFail($team->startup_id);



            return view('pages.dashboard.team', [
                'title' => 'Dashboard Team',
                'users' => $users,
                'teamName' => $teamName,
                'startup' => $startup
            ]);
        }else {
            $allTeam = Team::all();

            return view('pages.dashboard.team', [
                'title' => 'Dashboard Team',
                'team' => $allTeam
            ]);
        }


        // return view('dashboard.team', [
        //     'title' => 'Dashboard Team',
        //     'team' => $team
        // ]);
    }

    public function startup()
    {
        return view('pages.dashboard.startup', [
            'title' => 'Dashboard Startup'
        ]);
    }

    public function profile()
    {
        return view('pages.dashboard.profile', [
            'title' => 'Dashboard Profile'
        ]);
    }

    public function joinTeam(Request $request){
        // $validated = $request->validate([

        // ]);
        $refferal = $request->input('refferal');

        $cekRefferal = TeamMember::where('refferal',$refferal)->first();
        $count = TeamMember::where('team_id', $cekRefferal->team_id)->count();


        if($cekRefferal && $count < 4){
            $user = Auth::user();

            $newTeamMember = TeamMember::create([
                'team_id' => $cekRefferal->team_id,
                'user_id' => $user->id,
                'refferal' => $refferal,
            ]);

            return "anda berhasil join team silahkan refresh";
        }else{
            return "Kode yang anda masukan salah/Team sudah penuh";
        }


    }
}
