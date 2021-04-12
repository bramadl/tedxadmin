<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
                        ->join('payments', 'orders.id', 'payments.order_id')
                        ->where('payments.status', 'confirmed')
                        ->get();

        return view('products.merchandise.pengiriman.index', [
            'orders' => $orders
        ]);
    }
}
