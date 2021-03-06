<?php

namespace App\Http\Controllers;

use App\Audiens;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AudiensController extends Controller
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
        $response = Http::get($this->url . '/api/audiens');

        return view('users.audiens.index', [
            'audiens' => $response['audiens']
        ]);
    }
}
