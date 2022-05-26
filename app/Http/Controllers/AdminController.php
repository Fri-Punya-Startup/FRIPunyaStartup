<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Event,
    User,
    Jabatan,
};

class AdminController extends Controller
{
    public function member(){
        return view('admin.member',[
            'users' => User::all(),
            'member' => User::where('role', 'member')->get(),
        ]);
    }

    public function editMember(Request $request){
        return view('admin.edit-member',[
            'member' => User::find($request->id),
            'jabatan' => Jabatan::all(),
        ]);
    }

    public function naikPangkat(Request $request){

        if($request->has("delete")){
            $user = User::find($request->id);
            $user->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus member');
        }

        $user = User::find($request->id);

        if($request->jabatan_id == ""){
            $user->jabatan_id = null;
        }

        $user->update([
            'jabatan_id' => $request->jabatan_id,
        ]);

        return redirect("/admin/member")->with('success', 'Berhasil mengubah jabatan');
    }

    public function registerAkun(){
        return view('admin.register-akun',[
            'users' => User::where('verifikasi', null)->get(),
        ]);
    }
}

