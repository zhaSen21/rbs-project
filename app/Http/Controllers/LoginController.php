<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function loginprocess(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success', 'Kamu Berhasil Logout');
    }

    public function register(){
        return view ('auth.signup');
    }

    public function registerprocess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|unique:users,name',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        $credentials = $request->only('name', 'email', 'password');
        $credentials['password'] = Hash::make($request->password);

        // Debug purposes
        // dd($credentials);

        User::create($credentials);

        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('failed', 'Email atau Password Salah');
        }
    }

}
