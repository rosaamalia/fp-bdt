<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('daftar');
    }

    public function daftar(Request $request)
    {
        $validatedData = $request->validate([
            'nama-lengkap' => 'required|max:255',
            'username' => 'required|max:30|unique:users',
            'email' => 'required|email:dns|unique:users',
            'telepon' => 'required|max:15',
            'password' => 'required|min:8|max:255',
            'confirm-password' => 'required|min:8|max:255|same:password'
        ]);

        User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData["email"],
            'password' => Hash::make($validatedData['password']),
            'nama_user' => $validatedData['nama-lengkap'],
            'telepon_user' => $validatedData['telepon']
        ]);

        $request->session()->flash('sukses', 'Registrasi berhasil!');
        return redirect('/masuk');
    }
}