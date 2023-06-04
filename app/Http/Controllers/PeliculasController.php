<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;
use app\Helpers\functions;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Mockery\Undefined;
use PhpParser\Node\Stmt\Return_;

class PeliculasController extends Controller
{
    public function index()
    {
        return Peliculas::all();
    }
    public function create(Request $request)
    {
        if (Auth::user()->admin === '0') {
            return res_mensaje('No tienes privilegios para realizar esta acción');
        } else {


            $request->validate([
                'id_thmdb' => 'required|string|max:255',
                'img_thumb' => 'required|string|max:255',
                'img_portada' => 'required|string|max:255',
                'url_1080' => 'required|string|max:255',

                'active' => 'required|string|max:255',
            ]);


            $pel = Peliculas::create([
                'id_thmdb' => $request->id_thmdb,
                'img_thumb' => $request->img_thumb,
                'img_portada' => $request->img_portada,
                'url_1080' => $request->url_1080,
                'url_720' => $request->url_720,
                'url_480' => $request->url_480,
                'active' => $request->active,

            ]);

            return res_mensaje('Pelicula registrada con exito');
        }
    }
    public function update(Request $request, peliculas $peliculas)
    {


        if (Auth::user()->admin === '0') {
            return res_mensaje('No tienes privilegios para realizar esta acción');
        } else {


            $request->validate([
                'id_thmdb' => 'required|string|max:255',
                'img_thumb' => 'required|string|max:255',
                'img_portada' => 'required|string|max:255',
                'url_1080' => 'required|string|max:255',

                'active' => 'required|string|max:255',
            ]);


            $peliculas = Peliculas::find($request->id);
            $peliculas->id_thmdb = $request->id_thmdb;
            $peliculas->img_thumb = $request->img_thumb;
            $peliculas->img_portada = $request->img_portada;
            $peliculas->url_1080 = $request->url_1080;
            $peliculas->active = $request->active;

            $peliculas->save();

            return res_mensaje('Pelicula actualizada con exito');
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

            $planes = Peliculas::destroy($request->id);


            return res_mensaje('Pelicula eliminada con exito');
        }
    }
    public function getUltimasPeliculas()
    {
        $pelis =  DB::table('peliculas')->where('active', '=', 'true')
            ->limit('10')
            ->orderBy('updated_at', 'desc')
            ->get();
        return $pelis;
    }

    public function getPelicula(Request $request)
    {
        $pelis =  DB::table('peliculas')->where('id_thmdb', '=', $request->id_thmdb)
            ->get();


        $tmdb = Http::get('https://api.themoviedb.org/3/movie/' . $request->id_thmdb, [
            'api_key' => '65f1f530ee6ebbc494c9925c8786d9ab',
            'language' => 'es-mxlarag',
        ]);


        $res = $pelis[0];
        function verificarGenero($genero, $id)
        {

            $tmdb_ver = Http::get('https://api.themoviedb.org/3/movie/' . $id, [
                'api_key' => '65f1f530ee6ebbc494c9925c8786d9ab',
                'language' => 'es-mxlarag',
            ]);
            $ver = array_key_exists($genero, $tmdb_ver['genres']);
            if ($ver  == true) {
                return ' - ' . $tmdb_ver['genres'][$genero]['name'];
            } else {
                return "";
            }
        }
        return [
            "img_portada" => $res->img_portada,
            "titulo" => $tmdb['title'],
            "descripcion" => $tmdb['overview'],
            "duracion" => $tmdb['runtime'],
            "genero1" => $tmdb['genres'][0]['name'],
            "genero2" =>   verificarGenero(1, $request->id_thmdb),
            "genero3" =>   verificarGenero(2, $request->id_thmdb),
            "url_1080" => $res->url_1080,
        ];
    }

    public function getPeliculasAll()
    {
        $pelis = Peliculas::all();

        $pelis_count = count($pelis) - 1;

        $arr_info = [];


        for ($i = $pelis_count; $i >= 0; $i--) {

            $datos = $pelis[$i];



            $data_push = [

                'id_movie' => $datos->id_thmdb,
                'img_portada' => $datos->img_thumb

            ];

            array_push($arr_info, $data_push);
        }



        return $arr_info;
    }

    public function search(Request $request)
    {
        $result = DB::table('peliculas')
            ->where('titulo', 'like', '%' . $request->title . '%')
            ->select('id_thmdb', 'img_thumb')
            ->orderBy('id','desc')
            ->get();

        return $result;
    }
    public function sliderPrincipal()
    {
        $images =  DB::table('slider_page_principal')
            ->get();

        $count = count($images);

        $elegir_id = rand(1, $count);


        $image = DB::table('slider_page_principal')
        ->where('id', '=', $elegir_id)
        ->get()
       ;

       $img = $image[0];
        return  $img->img;


    }
}
