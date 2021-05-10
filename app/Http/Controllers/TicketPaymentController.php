<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
        return view('products.tickets.pembayaran.index', [
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

        $user = $response['user'];
        $payment = $response['payment'];
        $ticket = $response['ticket'];

        Mail::to($user['email_address'])->send(new InvoiceMail($user, $payment, $ticket));
        
        return redirect('tickets/pembayaran')
                ->with('success', 'Pembayaran berhasil ' . ($status === 'confirmed' ? 'dikonfirmasi.' : 'ditolak.'));
    }
}
