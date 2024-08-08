<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function login(LoginRequest $request)
    {
        $validatedData = $request->validated();

        if (auth()->attempt($validatedData)) {
            $request->session()->regenerate();
            return to_route('dashboard')->with('loginSuccess', 'Berhasil melakukan login!');
        } else {
            return back()->with(['loginError' => 'Username atau Password salah!']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
