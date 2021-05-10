<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TicketInvoiceController extends Controller
{
    private $url;

    public function __construct()
    {
        $this->url = env('TEDXBRAWIJAYA_URL');
    }
    
    public function index()
    {
        $response = Http::get($this->url . '/api/user-tickets');

        return view('products.tickets.pembelian.index', [
            'payments' => $response['payments']
        ]);
    }
}
