<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BusquedaController extends Controller
{
    public function buscar(Request $request)
    {
        $termino = $request->input('termino');
        $token = session('token');
    
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('https://euforia-films.up.railway.app/api/series-search', [
            'title' => $termino
        ]);
    
        $series = $response->json();


        $res = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post('https://euforia-films.up.railway.app/api/peliculas-search', [
            'title' => $termino
        ]);

        $peliculas = $res->json();


        return view('resultados_busqueda', compact('series', 'peliculas'));
    }
}
