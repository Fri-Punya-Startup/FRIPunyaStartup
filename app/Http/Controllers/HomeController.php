<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landingPage() {
        return view('home', [
            'title' => 'Landing Page'
        ]);
    }

    public function about() {
        return view('pages.home.about', [
            'title' => 'About Us'
        ]);
    }

    public function portfolio() {
        return view('pages.home.portfolio', [
            'title' => 'Our Poftfolio'
        ]);
    }

    public function team() {
        return view('pages.home.team', [
            'title' => 'Our Team'
        ]);
    }
}
