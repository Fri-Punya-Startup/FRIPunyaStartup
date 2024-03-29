<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Startup;
use App\Models\Proposal;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index(){
        return 0;
    }

    public function getListIdeaforge(){
        $getTeam = Team::with('members', 'startup.owner')->get();

  
        return view('pages.dashboard.ideaforge', [
            'title' => 'List Ideforge',
            'team' => $getTeam
        ]);
    }


    public function getDetailIdeaforge($startup){
        $team = Team::where('name_team', $startup)->firstOrFail();
        $team->load('members', 'startup.owner');
        $proposal = Proposal::where('startup_id', $team->startup_id)->get();

        return view('pages.dashboard.detail', [
            'title' => 'Detail',
            'team' => $team,
            'proposal' => $proposal
        ]);
     
    }

    public function updateIdeaStatus(Request $request, $startupId){
    }
}
