<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }
    public function auth(Request $request)
    {
      $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
      ]);
      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/');
      }
      session()->flash('error', 'Login gagal email atau password salah!');
      return redirect('/login');

    }
    public function logout(Request $request)
    {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/login');
    }
}
