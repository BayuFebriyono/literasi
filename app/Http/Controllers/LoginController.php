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

        // FUngsi jika sebelumnya guru login
        Auth::guard('guru')->logout();

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
        // Fungsi logout siswa jika sebelumnya siswa login
        Auth::guard('siswa')->logout();


        $credentials = $request->validate([
            'nip' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::guard('guru')->attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::guard('guru')->user()->admin) {
                return redirect()->intended('/admin-dashboard');
            }
        } else {
            return back()->with('error', 'Email Atau Password Salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('guru')->logout();
        Auth::guard('siswa')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
