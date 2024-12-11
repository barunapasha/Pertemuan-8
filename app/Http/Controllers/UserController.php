<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showSignin()
    {
        return view('signin');
    }

    public function signin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $userData = Auth::user();
            session()->put('user', [
                'username' => $userData->username,
                'email' => $userData->email
            ]);
            return redirect()->route('blog');
        } else {
            return back()->with('error', 'Username atau password salah');
        }
    }

    public function showSignup()
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        $data = $request->all();
        session()->put('user_register', $data);
        return redirect()->route('signin')->with('success', 'Registrasi Berhasil!');
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('user');
        return redirect()->route('signin');
    }
}