<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminUsersController extends Controller
{
    public function index()
    {
        $token = session('token');
        $response = Http::withToken($token)->get('https://euforia-films.up.railway.app/api/usuarios');
        $users = $response->json();
        return view('admin.users', compact('users'));
    }

    public function register(Request $request)
    {
        $token = session('token');
        $response = Http::withToken($token)->post('https://euforia-films.up.railway.app/api/register', [
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'username' => $request->username,
            'admin' => $request->admin,
            'telefonos' => $request->telefonos,
            'email' => $request->email,
            'password' => $request->password,
            'planes_id' => $request->planes_id,
            'vencimiento_plan' => $request->vencimiento_plan,
        ]);
    
        if ($response->successful()) {
            // La solicitud fue exitosa, realizar acciones adicionales si es necesario
            // ...
    
            return $response->json();
        } else {
            // La solicitud falló, manejar el error si es necesario
            // ...
    
            return response()->json(['message' => 'Error en la solicitud'], 500);
        }
    }
}
