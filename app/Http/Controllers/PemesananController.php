<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemesanan = Pemesanan::all();
        if($pemesanan -> count() > 0){
            return response()->json([
                'data' => $pemesanan
            ]);
        }
        else{
            return response()->json([
                'pesan' => "Tidak ada pemesanan."
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pemesanan = Pemesanan::create([
            'nama_pemesan' => $request->nama_pemesan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'tanggal_CI' => $request->tanggal_CI,
            'tanggal_CO' => $request->tanggal_CO,
            'pembayaran' => $request ->pembayaran,
            'id_kamar' => $request->id_kamar
        ]);
        return response()->json([
            'data' => $pemesanan,
            'pesan' => "Pemesanan berhasil dilakukan."
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pemesanan = Pemesanan::find($id);
        if($pemesanan){
        return response()->json([
            'data' => $pemesanan
        ]);
    }
    else{
        return response()->json([
            'pesan' => "Tidak ada pemesanan."
        ]);
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Pemesanan $pemesanan)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $pemesanan = Pemesanan::find($id);
        if($pemesanan){
            $pemesanan->update([
                'nama_pemesan' => $request->nama_pemesan,
                'no_hp' => $request->no_hp,
                'email' => $request->email,
                'tanggal_CI' => $request->tanggal_CI,
                'tanggal_CO' => $request->tanggal_CO,
                'pembayaran' => $request ->pembayaran,
                'id_kamar' => $request->id_kamar
            ]);
            return response()->json([
                'data' => $pemesanan,
                'pesan' => "Data pemesanan telah terupdate."
            ]);
        }
        else{
            return response()->json([
                'pesan' => "Data pemesanan tidak valid."
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan, int $id)
    {
        $pemesanan = Pemesanan::find($id);
        if($pemesanan){
            $pemesanan->delete();
            return response()->json([
                'pesan' => "Data pemesanan telah dihapus."
            ]);
        }
        else{
            return response()->json([
                'pesan' => "Data pemesanan tidak valid."
            ]);
        }
    }
}
