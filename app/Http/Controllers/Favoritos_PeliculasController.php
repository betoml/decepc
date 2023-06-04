<?php

namespace App\Http\Controllers;

use App\Models\favoritos_peliculas;
use App\Models\Favoritos_seriess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Favoritos_PeliculasController extends Controller
{
    public function index(Request $request)
    {
        $favoritos = DB::table('favoritos_peliculas')
            ->where('users_id', '=', $request->users_id)
            ->orderBy('id', 'desc')
            ->select('peliculas_id', 'users_id')
            ->get();

        $fav = count($favoritos) -1;
        $arr_data = [];



       for ($i = 0; $i <= $fav; $i++) {

            $favorito =  $favoritos[$i];


            $id_tmdb = DB::table('peliculas')
            ->where('id', '=',$favorito->peliculas_id)
        
            ->select('id_thmdb', 'img_thumb')
            ->get();

    
            array_push($arr_data, $id_tmdb[0]);
        }


   

        return $arr_data;
    }


    public function verificar(Request $request)
    {
        $id_pelis =  DB::table('peliculas')
            ->where('id_thmdb', '=', $request->peliculas_id)
            ->select('id')
            ->get();
        $id_peli = $id_pelis[0];

        $favoritos = DB::table('favoritos_peliculas')
            ->where('peliculas_id', '=', $id_peli->id)
            ->where('users_id', '=', $request->users_id)
            ->get();
        if (count($favoritos) > 0) {
            return response()->json([
                'message' => true
            ]);
        } else {
            return response()->json([
                'message' => false
            ]);
        }

        //  return count($favoritos);
    }


    public function create(Request $request)
    {
        /*        $request->validate([
            'peliculas_id' => 'required|max:255',
            'users_id' => 'required|max:255',
        ]); */
        $id_pelis =  DB::table('peliculas')
            ->where('id_thmdb', '=', $request->peliculas_id)
            ->select('id')
            ->get();
        $id_peli = $id_pelis[0];
        $addFav =  DB::table('favoritos_peliculas')
            ->insert(
                [
                    'peliculas_id' => $id_peli->id,
                    'users_id' => $request->users_id

                ]
            );
        return response()->json([
            'message' => 'REGISTRADO'
        ]);
    }

    public function delete(Request $request)
    {

        $id_pelis =  DB::table('peliculas')
            ->where('id_thmdb', '=', $request->peliculas_id)
            ->select('id')
            ->get();
        $id_peli = $id_pelis[0];

        DB::table('favoritos_peliculas')
            ->where('peliculas_id', '=', $id_peli->id)
            ->where('users_id', '=', $request->users_id)
            ->delete();
    }
}
