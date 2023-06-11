<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = Konsultasi::all();
        return response()->json($konsultasi);
    }

    public function show($id)
    {
        $konsultasi = Konsultasi::find($id);
        if (!$konsultasi) {
            return response()->json(['message' => 'Konsultasi not found'], 404);
        }
        return response()->json($konsultasi);
    }
}
