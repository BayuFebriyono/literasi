<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewSiswa()
    {
        return view('login_siswa');
    }

    public function viewGuru()
    {
        return view('login_guru');
    }

    public function loginSiswa(Request $request)
    {
        $credentials = $request->validate([
            'nomor_induk' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('siswa')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('error', 'Email atau password salah');
    }

    public function loginGuru(Request $request)
    {
        $credentials = $request->validate([
            'nip' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('guru')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
