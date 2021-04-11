<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "user_id" => "required",
            "order_id" => "required",
            "payment_proof" => "required",
            "total" => "required"
        ]);

        $ext = last(explode('/', explode(';', $request->payment_proof)[0]));
        $exts = ['png', 'jpg', 'jpeg'];
        if (!in_array($ext, $exts)) {
            return response()->json([
                "success" => false,
                "message" => "Invalid file format!"
            ]);
        }
        
        $payment_proof = time() . '.' . $ext;
        \Image::make($request->payment_proof)->save(public_path('assets/img/payments_proofs/') . $payment_proof);

        $payment = Payment::create([
            "user_id" => $request->user_id,
            "order_id" => $request->order_id,
            "payment_proof" => $payment_proof,
            "status" => $request->status,
            "total" => $request->total
        ]);
        if (!$payment) {
            return response()->json([
                "success" => false,
                "message" => "Unknown error occured."
            ]);
        }

        return response()->json([
            "success" => true,
            "payment" => $payment
        ]);
    }
}
