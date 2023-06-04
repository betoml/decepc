<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SeriesController extends Controller
{


    public function index()
    {
        return Series::all();
    }
    public function create(Request $request)
    {
        if (Auth::user()->admin === '0') {
            return res_mensaje('No tienes privilegios para realizar esta acción');
        } else {


            $request->validate([
                'img_thumb_series' => 'required|string|max:255',
                'img_portada_series' => 'required|string|max:255',
                'id_thmdb_series' => 'required|string|max:255',
                'active' => 'required|string|max:255'
            ]);


            $pel = Series::create([
                'img_thumb_series' => $request->img_thumb_series,
                'img_portada_series' => $request->img_portada_series,
                'id_thmdb_series' => $request->id_thmdb_series,
                'active' => $request->active

            ]);

            return res_mensaje('Serie registrada con exito');
        }
    }
    public function update(Request $request, series $update)
    {


        if (Auth::user()->admin === '0') {
            return res_mensaje('No tienes privilegios para realizar esta acción');
        } else {


            $request->validate([
                'img_thumb_series' => 'required|string|max:255',
                'img_portada_series' => 'required|string|max:255',
                'id_thmdb_series' => 'required|string|max:255',
                'active' => 'required|string|max:255'
            ]);


            $update = Series::find($request->id);
            $update->img_thumb_series = $request->img_thumb_series;
            $update->img_portada_series = $request->img_portada_series;
            $update->id_thmdb_series = $request->id_thmdb_series;
            $update->active = $request->active;


            $update->save();

            return res_mensaje('Serie actualizada con exito');
        }
    }
    public function delete(Request $request)
    {

        if (Auth::user()->admin === '0') {
            return res_mensaje('No tienes privilegios para realizar esta acción');
        } else {

            $request->validate([
                'id' => 'required|string|max:255',
            ]);

            $planes = Series::destroy($request->id);


            return res_mensaje('Serie eliminada con exito');
        }
    }
    public function getUltimasSeries()
    {
        $pelis =  DB::table('series')->where('active', '=', true)
            ->limit('10')
            ->orderBy('updated_at', 'desc')
            ->get();




        return $pelis;
    }

    public function getTemporadasAll(Request $request)
    {

            $temp = explode(' ', $request->temporada);
            $tempo = $temp[1];
    
    
            $setIdSerie = DB::table('series')
                ->select('id')
                ->where('id_thmdb_series', '=', $request->id_serie_tmdb)
                ->get();
    
            $id_serie = $setIdSerie[0];
    
    
            $setIdTemporadas = DB::table('temporadas')
                ->select('id')
                ->where('id_thmdb_series', '=', $id_serie->id)
                ->where('temporadas', '=', $tempo)
                ->get();
            $id_temporada = $setIdTemporadas[0];
    
    
            $getCapitulos = DB::table('capitulos')
                ->select('*')
                ->where('id_temporadas_series', '=', $id_temporada->id)
                ->get();
    
    
    
            $getCapitulosCount = count($getCapitulos);
    
            $array_capitulos = [];
            for ($i = 0; $i <  $getCapitulosCount; $i++) {
                $ep = $i + 1;
    
                $tmdb = Http::get('https://api.themoviedb.org/3/tv/' . $request->id_serie_tmdb . '/season/' . $tempo . '/episode/' . $ep, [
                    'api_key' => '65f1f530ee6ebbc494c9925c8786d9ab',
                    'language' => 'es-mx',
                ]);
    
    
                $capitulosInfo = $getCapitulos[$i];
    
                $data_array = [
                    'id' => $capitulosInfo->id,
                    'id_temporadas_series' => $capitulosInfo->id_temporadas_series,
                    'id_thmdb_series' => $capitulosInfo->id_thmdb_series,
                    'episodios' => $capitulosInfo->episodios,
                    'titulo' => isset($tmdb['name']) ? $tmdb['name'] : '',
                    'descripcion' => isset($tmdb['overview']) ? $tmdb['overview'] : '',
                    'miniatura' => isset($tmdb['still_path']) ? 'https://www.themoviedb.org/t/p/w227_and_h127_bestv2/' . $tmdb['still_path'] : 'https://euforia-films.up.railway.app/img/miniatura.jpg',
                    'url_1080_s' => $capitulosInfo->url_1080_s,
    
                ];
    
                array_push($array_capitulos, $data_array);
            }
    
    
       return  $array_capitulos;

        
    }

    public function getTemporadas(Request $request)
    {


        $setIdSerie = DB::table('series')
            ->select('id')
            ->where('id_thmdb_series', '=', $request->id_thmdb_series)
            ->get();

        $id_serie = $setIdSerie[0];




        $datos =   DB::table('temporadas')
            ->where('id_thmdb_series', '=', $id_serie->id)
            ->select('temporadas')
            ->get();

        $arr_datos  = [];



        $datos_count = count($datos);

        for ($i = 0; $i < $datos_count; $i++) {

            $date = $datos[$i];
            array_push($arr_datos, 'Temporada ' . $date->temporadas);
            # code...
        }



        return $arr_datos;
    }


    public function getSerie(Request $request)
    {
        $serie =  DB::table('series')->where('id_thmdb_series', '=', $request->id_thmdb_series)
            ->get();


        $tmdb = Http::get('https://api.themoviedb.org/3/tv/' . $request->id_thmdb_series, [
            'api_key' => '65f1f530ee6ebbc494c9925c8786d9ab',
            'language' => 'es-mx',
        ]);


        $res = $serie[0];
        function verificarGenero($genero, $id)
        {

            $tmdb_ver = Http::get('https://api.themoviedb.org/3/tv/' . $id, [
                'api_key' => '65f1f530ee6ebbc494c9925c8786d9ab',
                'language' => 'es-mx',
            ]);
            $ver = array_key_exists($genero, $tmdb_ver['genres']);
            if ($ver  == true) {
                return ' - ' . $tmdb_ver['genres'][$genero]['name'];
            } else {
                return "";
            }
        }
        return [
            "img_portada_series" => $res->img_portada_series,
            "titulo_series" => $tmdb['name'],
            "descripcion_series" => $tmdb['overview'],
            "temporadas" => $tmdb['number_of_seasons'],
            "genero1" => $tmdb['genres'][0]['name'],
            "genero2" =>   verificarGenero(1, $request->id_thmdb_series),
            "genero3" =>   verificarGenero(2, $request->id_thmdb_series),
        ];
    }
    public function getSeriesAll(){
        $pelis = Series::all();

        $pelis_count = count($pelis) - 1;

        $arr_info = [];


        for ($i=$pelis_count; $i >= 0; $i--) { 

            $datos = $pelis[$i];



            $data_push = [

                'id_movie' => $datos->id_thmdb_series,
                'img_portada' => $datos->img_thumb_series
          
            ];

            array_push($arr_info, $data_push);
        }


     
        return $arr_info;

    }

    public function search(Request $request)
    {
        $result = DB::table('series')
            ->where('titulo', 'like', '%' . $request->title . '%')
            ->select('id_thmdb_series', 'img_thumb_series')
            ->orderBy('id','desc')
            ->get();

        return $result;
    }
}
