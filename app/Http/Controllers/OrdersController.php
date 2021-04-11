<?php

namespace App\Http\Controllers;

use App\Audiens;
use App\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function store(Request $request)
    {
        // Validasi Request
        $request->validate([
            "username" => "required|string",
            "email" => "required|string|email",
            "phone_number" => "required|numeric",
            "address" => "required|string",
            "kelurahan" => "required|string",
            "kecamatan" => "required|string",
            "kabupaten" => "required|string",
            "provinsi" => "required|string",
            "kode_pos" => "required|numeric",
            "size" => "required|string",
            "color" => "required|string",
        ]);

        // Masukkin ke database
        $order = Order::create([
            "product" => $request->product,
            "price" => $request->price,
            "username" => $request->username,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "address" => $request->address,
            "kelurahan" => $request->kelurahan,
            "kecamatan" => $request->kecamatan,
            "kabupaten" => $request->kabupaten,
            "provinsi" => $request->provinsi,
            "kode_pos" => $request->kode_pos,
            "size" => $request->size,
            "color" => $request->color,
        ]);

        // Kembalikan response
        return response()->json([
            "success" => true,
            "order" => $order
        ]);
    }

    public function show(Request $request, $id, $username)
    {
        $user_id = $id;
        $username = $username;
        $payment_id = $request->query('payment_id');

        $user = Audiens::find($user_id);
        if (!$user) {
            return response()->json([
                "success" => false,
                "message" => "User not found."
            ]);
        }

        $order = Order::find($payment_id);
        if (!$order) {
            return response()->json([
                "success" => false,
                "message" => "User not found."
            ]);
        }

        return response()->json([
            "success" => true,
            "data" => [
                "user" => $user,
                "order" => $order
            ]
        ]);
    }
}
