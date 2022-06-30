<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Models\User;

class waController extends Controller
{
    public function acc(Request $request)
    {
        if($request->has("delete")){
            $user = User::find($request->id);
            $user->delete();
            return redirect()->back();
        }

        $validate = $request->validate([
            'phone' => 'required',
            'id' => 'required',
        ]);

        $response = Http::post('http://localhost:5000/wa/acc/', [
            'id' => $validate['id'],
            'phone' => $validate['phone'],
            'pass' => 'fpsnihbos',
        ])->json();

        if ($response['status'] == 'success') {
            return redirect()->back()->with('success', 'Berhasil mengaktifkan akun');
        }elseif ($response['status'] == 'failed') {
            return redirect()->back()->with('failed', 'Gagal mengaktifkan akun');
        }

    }
}