<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', [
        'title' => 'Login',
        'active' => 'Login'
    ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
    'nrp' => ['required','max:8', 'min:8'],
    'password' => 'required'
    ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginEror', 'Gagal Masuk');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
