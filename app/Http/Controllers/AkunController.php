<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function akun()
    {
        $id = auth()->user()->id;
        $data = User::find($id);

        return view('akun', [
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $id = auth()->user()->id;
        $data = User::find($id);

        // dd($data);

        $data->update([
            'nama_user' => $request['nama_lengkap'],
            'username' => $request['username'],
            'email' => $request['email'],
            'telepon_user' => $request['telepon'],
            'tanggal_lahir_user' => $request['tanggal_lahir'],
            'jenis_kelamin_user' => $request['jenis_kelamin']
        ]);

        return redirect('/akun')->with('sukses', 'Data akun berhasil diperbarui!');
    }
}