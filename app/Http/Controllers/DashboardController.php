<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('pages.dashboard.home', [
            'title' => 'Dashboard Home',
            'startups' => auth()->user()->team->startups ?? null,
            'team' => auth()->user()->team ?? null,
            'user' => auth()->user(),
        ]);
    }
    public function team() {
        return view('pages.dashboard.team2', [
            'title' => 'Dashboard Team'
        ]);
    }
    public function startup() {
        return view('pages.dashboard.startup', [
            'title' => 'Dashboard Startup'
        ]);
    }
    public function profile() {
        return view('pages.dashboard.profile', [
            'title' => 'Dashboard Profile'
        ]);
    }
}
