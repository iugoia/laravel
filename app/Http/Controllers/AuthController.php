<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $remember = $request->remember;
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('user.index');
        }
        return redirect()->back()->with('error', "Пользователь не найден");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
