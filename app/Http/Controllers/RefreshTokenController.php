<?php

namespace App\Http\Controllers;

use App\Mail\RefreshTokenMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class RefreshTokenController extends Controller
{
    private $url;

    public function __construct()
    {
        $this->url = env('TEDXBRAWIJAYA_URL');
    }
    
    public function index()
    {   
        $response = Http::get($this->url . '/api/refresh-tokens');
        return view('products.tickets.refreshToken.index', [
            'refreshTokens' => $response['refreshTokens']
        ]);
    }

    public function verify(Request $request, $id)
    {
        $status = $request->query('status');
        $response = Http::put($this->url . '/api/refresh-tokens/verify?user_ticket_id=' . $id . '&status=' . $status);

        Mail::to($response['payment']['user']['email_address'])->send(new RefreshTokenMail($status, $response['payment'], $response['userTicket']));
        
        return redirect('tickets/permintaan-token')
                ->with('success', 'Permintaan token berhasil ' . ($status === 'confirmed' ? 'dikonfirmasi.' : 'ditolak.'));
    }

    public function show(Request $request)
    {
        # code...
    }
}
