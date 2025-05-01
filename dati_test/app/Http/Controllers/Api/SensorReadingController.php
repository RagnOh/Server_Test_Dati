<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Temperatura;

class SensorReadingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'temperatura' => 'required|numeric'
        ]);

        $temp = new Temperatura();
        $temp->valore = $request->temperatura;
        $temp->save();

        return response()->json(['message' => 'Dati salvati']);
    }
}