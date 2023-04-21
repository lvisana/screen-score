<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (\Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return Redirect::route('dashboard');
        } else {
            return Redirect::route('login')->withErrors(['not-authorized', 'Email or password incorrect']);;
        }

    }

    public function logout(Request $request)
    {
        \Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return  Redirect::route('login');
    }
}
