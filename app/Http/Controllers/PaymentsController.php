<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = DB::table('payments')
                        ->join('orders', 'orders.id', 'payments.order_id')
                        ->get();

        $provinces = [
            "aceh" => 60000,
            "Bali" => 20000,
            "Bangka Belitung" => 40000,
            "Banten" => 25000,
            "Bengkulu" => 45000,
            "DI Yogyakarta" => 15000,
            "DKI Jakarta" => 20000,
            "Gorontalo" => 70000,
            "Jambi" => 40000,
            "Jawa Barat" => 20000,
            "Jawa Tengah" => 15000,
            "Jawa Timur" => 10000,
            "Kalimantan Barat" => 40000,
            "Kalimantan Selatan" => 30000,
            "Kalimantan Tengah" => 50000,
            "Kalimantan Timur" => 43000,
            "Kalimantan Utara" => 50000,
            "Kepulauan Riau" => 50000,
            "Lampung" => 40000,
            "Maluku_" => 70000,
            "Maluku Utara" => 70000,
            "NTB" => 20000,
            "NTT" => 60000,
            "Papua Barat" => 145000,
            "Papua_" => 115000,
            "Riau_" => 50000,
            "Sulawesi Barat" => 45000,
            "Sulawesi Selatan" => 40000,
            "Sulawesi Tengah" => 50000,
            "Sulawesi Tenggara" => 60000,
            "Sulawesi Utara" => 67000,
            "Sumatera Barat" => 45000,
            "Sumatera Selatan" => 40000,
            "Sumatera Utara" => 45000,
        ];

        return view('products.merchandise.pembayaran.index', [
            'payments' => $payments,
            'provinces' => $provinces
        ]);
    }
    
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
        \Image::make($request->payment_proof)->save("/home/u8832552/public_html/admin/assets/img/payments_proofs/" . $payment_proof);

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

    public function confirm($id)
    {
        $confirmed = Payment::where('order_id', $id)
            ->update([
                'status' => 'confirmed'
            ]);

        if (!$confirmed) {
            return redirect()
                ->back()
                ->with('error', 'Unknown error occured.');
        }

        return redirect()
            ->back()
            ->with('success', 'Pembayaran berhasil dikonfirmasi!');
    }

    public function decline($id)
    {
        $declined = Payment::where('order_id', $id)
            ->update([
                'status' => 'declined'
            ]);
        
        if (!$declined) {
            return redirect()
                ->back()
                ->with('error', 'Unknown error occured.');
        }

        return redirect()
            ->back()
            ->with('success', 'Pembayaran berhasil ditolak!');
    }
}
