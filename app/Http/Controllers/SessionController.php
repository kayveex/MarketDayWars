<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index() {
        return view('Auth.login');
    }

    function select ()  {
        return view('Auth.selector');
    }

    function confirm() {
        return view('Auth.persetujuan');
    }

    function login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => "Username tidak boleh kosong",
            'password.required' => "Password tidak boleh kosong"
        ]);

        // Advanced Ver - With isActive logic

        $credentials = $request->only('username', 'password');

        // Mengecek apakah kombinasi username & password valid
        if (Auth::attempt($credentials)) {
            // Mengecek apakah akun memiliki isActive == 1
            if (auth()->user()->isActive == 1) {
                //  Jika iya, maka redirect ke halaman dashboard
                return redirect('dashboard');
            }else {
                // Otomatis logout dari akun, dan menuju ke tampilan menunggu konfirmasi
                Auth::logout();
                return view('Auth.persetujuan');
            }
        }else {
            // Jika login invalid, akan kembali ke /login
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak valid!')->withInput();
        }
    }

    function logout() {
        Auth::logout();
        return redirect('');
    }
}
