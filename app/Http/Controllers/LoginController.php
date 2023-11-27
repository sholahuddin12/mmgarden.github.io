<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            "noWA" => "6281213469281"
        ]);
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('database');
        }

        return back()->with('loginError', 'Nama atau Password Salah!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function create()
    {
        return view('database.create', [
            "title" => "MMGarden | Panduan",
            "noWA" => "6281213469281"
        ]);
    }
}
