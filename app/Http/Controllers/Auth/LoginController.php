<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only(['username', 'password']);

        if (Auth::guard('cores')->attempt($credentials)) {
            return redirect()
                ->route('dashboard')
                ->with('success', 'Welcome, ' . Auth::guard('cores')->user()->username . '!');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Please check your username and password again.');
        }
    }
}
