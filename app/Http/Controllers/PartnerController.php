<?php

namespace App\Http\Controllers;

use App\Mail\UserVerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class PartnerController extends Controller
{
    private $url;

    public function __construct()
    {
        $this->url = env('TEDXBRAWIJAYA_URL');
    }

    public function index()
    {
        $response = Http::get($this->url . '/api/partners');

        return view('users.partners.index', [
            'partners' => $response['partners']
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'avatar' => 'required|mimes:jpg,png,jpeg|max:2048',
            'name' => 'required|string',
            'role' => 'required|string',
            'tag.*' => 'required|string',
            'url.*' => 'required|string|url'
        ]);
        
        $extension = $request->file('avatar')->getClientOriginalExtension();
        $fileName = time();
        $avatar = $fileName . '.' . $extension;
        $request->file('avatar')->storeAs('public/brands', $avatar);
        
        $response = Http::post($this->url . '/api/partners', [
            'avatar' => $avatar,
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'tag' => $request->tag,
            'url' => $request->url
        ]);
        
        if ($response['success']) {
            $partner = $response['partner'];
            Mail::to($request->email)->send(new UserVerifyMail($partner, $request->email, $response['password']));
            
            return redirect()
                    ->back()
                    ->with('success', 'Partner berhasil ditambahkan!');
        }
    }
}
