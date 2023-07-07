<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function home()
    {
        return view('pages.dashboard.home', [
            'title' => 'Dashboard Home',
            'startup' => auth()->user()->team->startup ?? null,
            'team' => auth()->user()->team ?? null,
            'user' => auth()->user(),
        ]);
    }

    public function team()
    {
        return view('pages.dashboard.team2', [
            'title' => 'Dashboard Team'
        ]);
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
            $avatar = auth()->user()->id . '.' . $data['avatar']->extension();
            $request->file('avatar')->move(public_path('/images/avatars'), $avatar);
            $data['avatar'] = "/images/avatars/$avatar";
        }

        $request->password ? $data['password'] = bcrypt($data['password']) : null;

        User::find(auth()->user()->id)->update($data);

        return redirect()->back()->with('alert', 'Profile berhasil diupdate.');
    }
}
