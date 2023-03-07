<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login', [
            'title' => 'queezfast - Login'
        ]);
    }

    // login
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required|min:10|max:20',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }

        return back()->with('gagal', 'Username / Password salah');
    }

    // logout
    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('home'));
    }
}
