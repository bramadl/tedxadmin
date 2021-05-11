<?php

namespace App\Http\Controllers;

use App\Mail\SpeakerVerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class SpeakerController extends Controller
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
        $response = Http::get($this->url . '/api/speakers');

        return view('users.speakers.index', [
            'speakers' => $response['speakers']
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

        $response = Http::post($this->url . '/api/speakers', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email_address,
            'phone_number' => $request->phone_number,
            'street_address' => $request->street_address
        ]);

        if ($response['success']) {
            $speaker = $response['speaker'];
            Mail::to($request->email_address)->send(new SpeakerVerifyMail($speaker, $response['password']));

            return redirect()
                    ->back()
                    ->with('success', 'Speaker created successfully!');
        }
    }
}
