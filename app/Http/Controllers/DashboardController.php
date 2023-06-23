<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('pages.dashboard.home', [
            'title' => 'Dashboard Home'
        ]);
    }
    public function team() {
        return view('pages.dashboard.team', [
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
