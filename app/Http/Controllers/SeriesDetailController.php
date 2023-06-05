<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SeriesDetailController extends Controller
{
    public function index($code)
    {
        $token = session('token');
        $peliculas = Http::withToken($token)->post('https://euforia-films.up.railway.app/api/series-detail', [
            'id_thmdb_series' => $code
        ]);
        $temporadas = Http::withToken($token)->post('https://euforia-films.up.railway.app/api/series-temporadas', [
            'id_thmdb_series' => $code
        ]);
        $temporadas = json_decode($temporadas);
        $tempDatas = [];
        foreach ($temporadas as $temporada) {
            $capitulos = Http::withToken($token)->post('https://euforia-films.up.railway.app/api/series-detail-temporadas', [
                'id_serie_tmdb' => $code,
                'temporada' => $temporada
            ]);

            array_push($tempDatas, [
                $temporada =>   json_decode($capitulos)
            ]);
        }
       // dd(json_encode($tempDatas));

        return view('series.series-detail', compact('peliculas', 'tempDatas'));
    }
}
