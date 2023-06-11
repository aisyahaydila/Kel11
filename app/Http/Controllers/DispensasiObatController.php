<?php

namespace App\Http\Controllers;

use App\Models\Dispensasi;
use App\Models\DispensasiObat;

class DispensasiObatController extends Controller
{
    public function index()
    {
        $DispensasiObat = Dispensasi::all();
        return response()->json($DispensasiObat);
    }

    public function show($id)
    {
        $DispensasiObat = Dispensasi::find($id);
        if (!$DispensasiObat) {
            return response()->json(['message' => 'Obat not found'], 404);
        }
        return response()->json($DispensasiObat);
    }
}
