<?php

namespace App\Http\Controllers;

use App\Http\Requests\LokaHastaKaryaRequest;
use App\LokaHastaKarya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LokaHastaKaryaController extends Controller
{
    public function index()
    {
        $files = LokaHastaKarya::all();
        return view('loka-hasta-karya.index', [
            'files' => $files
        ]);
    }

    public function store(LokaHastaKaryaRequest $request)
    {
        // Validate the requests
        $validated = $request->validated();

        if ($validated['file_karya']) {
            $file = base64_decode(last(explode('base64,', $validated['file_karya'])));
            $fileName = time () . '.pdf';
            $filePath = public_path() . "/assets/file/" . $fileName;
            file_put_contents($filePath, $file);
        }

        // Save the requests to DB
        $response = LokaHastaKarya::create([
            'nama_lengkap' => $validated['nama_lengkap'],
            'email' => $validated['email'],
            'nomor_wa' => $validated['nomor_wa'],
            'instansi_komunitas' => $validated['instansi_komunitas'],
            'media_sosial' => $validated['media_sosial'],
            'bentuk_karya' => $validated['bentuk_karya'],
            'judul_karya' => $validated['judul_karya'],
            'deskripsi_karya' => $validated['deskripsi_karya'],
            'tahun_pembuatan_karya' => $validated['tahun_pembuatan_karya'],
            'file_karya' => $fileName,
            'sumber_informasi' => $validated['sumber_informasi'],
            'status' => 'pending'
        ]);

        // Return a responses
        return response()->json([
            'success' => true,
            'message' => 'Resource stored successfully.',
            'data' => $response
        ]);
    }

    public function confirm($id)
    {
        $file = LokaHastaKarya::find($id);
        $file->status = 'confirmed';
        $file->save();
        
        return redirect()
            ->back()
            ->with('success', 'The submission is successfully confirmed.');
    }
    
    public function decline($id)
    {
        $file = LokaHastaKarya::find($id);
        $file->status = 'declined';
        $file->save();

        return redirect()
            ->back()
            ->with('success', 'The submission is successfully declined.');
    }
}
