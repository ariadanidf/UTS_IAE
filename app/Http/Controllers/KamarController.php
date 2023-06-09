<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kamar = Kamar::all();
        if($kamar->count() > 0){
            return response()->json([
                'data' => $kamar
            ]);
        }
        else{
            return response()->json([
                'pesan' => "Kamar tidak tersedia"
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
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kamar = Kamar::find($id);
        if($kamar){
        return response()->json([
            'data' => $kamar
        ]);
    }
    else{
        return response()->json([
            'pesan' => "Tidak ada kamar tersedia."
        ]);
    }
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Kamar $kamar)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Kamar $kamar)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Kamar $kamar)
    // {
    //     //
    // }
}
