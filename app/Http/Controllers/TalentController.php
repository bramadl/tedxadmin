<?php

namespace App\Http\Controllers;

use App\Mail\TalentVerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class TalentController extends Controller
{
    private $url;

    public function __construct()
    {
        $this->url = env('TEDXBRAWIJAYA_URL');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get($this->url . '/api/talents');

        return view('users.talents.index', [
            'talents' => $response['talents']
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:20',
            'last_name' => 'nullable|string|max:30',
            'email_address' => 'required|string|email',
            'phone_number' => [
                'nullable', 'string', 'regex:/^(\+62|62)?[\s-]?0?8[1-9]{1}\d{1}[\s-]?\d{3,8}$/'
            ],
            'street_address' => 'nullable|string'
        ]);

        $response = Http::post($this->url . '/api/talents', $request->all());

        if ($response['success']) {
            $talent = $response['talent'];
            Mail::to($request->email_address)->send(new TalentVerifyMail($talent, $response['password']));

            return redirect()
                    ->back()
                    ->with('success', 'Talent created successfully!');
        }
    }
}
