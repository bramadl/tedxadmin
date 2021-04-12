<?php

namespace App\Http\Controllers\Auth;

use App\Core;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:40',
            'email' => 'required|string|email|unique:cores',
            'password' => 'required|string|min:4|confirmed',
            'role' => 'required|string',
        ]);

        $core = Core::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);

        if (!$core) {
            return redirect()
                ->back()
                ->with('error', 'Unknown error occured.');
        }

        return redirect()
            ->route('login')
            ->with('success', 'Account created successfully!');
    }
}
