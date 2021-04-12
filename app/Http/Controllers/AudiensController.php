<?php

namespace App\Http\Controllers;

use App\Audiens;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AudiensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audiens = Audiens::all();

        return view('users.audiens.index', [
            'audiens' => $audiens
        ]);
    }

    public function orders($id)
    {
        $merchandises = DB::table('payments')
            ->join('audiens', 'audiens.id', 'payments.user_id')
            ->join('orders', 'orders.id', 'payments.order_id')
            ->where('audiens.id', $id)
            ->get();

        return response()->json([
            'success' => true,
            'merchandises' => $merchandises
        ]);
    }

    public function verify($id, $token)
    {
        $audiens = DB::table("grant_clients")
            ->where([
                "user_id" => $id,
                "token" => $token
            ])
            ->get();
        if (!count($audiens)) {
            return response()->json([
                "success" => false
            ]);
        }

        $audiens_id = $audiens[0]->user_id;
        return [
            "success" => true,
            "data" => Audiens::find($audiens_id)
        ];
    }

    public function logout($id, $token)
    {
        $audiens = DB::table("grant_clients")
            ->where([
                "user_id" => $id,
                "token" => $token
            ])
            ->get();
        if (!count($audiens)) {
            return response()->json([
                "success" => false
            ]);
        }

        $record = DB::table("grant_clients")
            ->where([
                "user_id" => $id,
                "token" => $token
            ])->delete();
        if (!$record) {
            return response()->json([
                "success" => false,
                "message" => "Unknown error occured."
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "User has been logged out!"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Audiens  $audiens
     * @return \Illuminate\Http\Response
     */
    public function show(Audiens $audiens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Audiens  $audiens
     * @return \Illuminate\Http\Response
     */
    public function edit(Audiens $audiens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Audiens  $audiens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audiens $audiens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Audiens  $audiens
     * @return \Illuminate\Http\Response
     */
    public function destroy(Audiens $audiens)
    {
        //
    }
}
