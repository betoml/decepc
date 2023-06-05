<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::post('https://euforia-films.up.railway.app/api/login', [
            "email" => $request->email,
            "password" => $request->password
        ]);


        if ($response['code'] === 3) {
            session()->put('id', $response['user']['id']);
            session()->put('nombre', $response['user']['nombres_users']);
            session()->put('token', $response['access_token']);
            return response()->json($response->json());
        } else {
            return response()->json($response->json());
        }
    }
    public function painel()
    {
        return view('dashboard.painel');
    }
}
