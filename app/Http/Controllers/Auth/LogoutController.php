<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout()
    {
        $username = Auth::guard('cores')->user()->username;
        
        Auth::guard('cores')->logout();
        return redirect()
            ->route('login')
            ->with('success', 'Goodbye, ' . $username . '!');
    }
}
