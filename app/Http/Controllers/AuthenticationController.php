<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login () {
        return view('login');
    }

    public function attempt (Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            // return redirect()->intended('dashboard');
            return redirect()->route('admin.index');
        }
    }

    public function logout () {
        Auth::logout();
        return redirect()->route('project');
    }
}
