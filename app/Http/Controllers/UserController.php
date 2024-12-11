<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showSignin()
    {
        return view('signin');
    }

    public function signin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username == 'admin' && $password == 'password') {
            $request->session()->put('user', [
                'is_login' => true,
                'username' => $username
            ]);

            return redirect()->route('profile');
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
        session()->forget('user');
        return redirect()->route('signin');
    }
}