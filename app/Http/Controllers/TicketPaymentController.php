<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TicketPaymentController extends Controller
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
        $payments = Http::get($this->url . '/api/payments');
        return view('products.tickets.pembelian.index', [
            'payments' => $payments['payments'],
            'url' => $this->url
        ]);
    }

    public function verify(Request $request, $id)
    {
        $status = $request->query('status');
        
        $response = Http::put($this->url . '/api/payments/verify?status=' . $status . '&payment_id=' . $id);
        if (!$response['success']) {
            return redirect()
                    ->back()
                    ->with('error', 'Terjadi kesalahan, mohon coba lagi nanti');
        }
        
        return redirect('tickets/pembayaran')
                ->with('success', 'Pembayaran berhasil ' . ($status === 'confirmed' ? 'dikonfirmasi.' : 'ditolak.'));
    }
}
