<?php

use App\Http\Controllers\Frontend\LoginController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/auth', [LoginController::class, 'index']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/panel', [LoginController::class, 'painel'])->name('home');




Route::get('/series', function () {
    $token = session('token');
    $peliculas = Http::withToken($token)->get('https://euforia-films.up.railway.app/api/series');


    return view('series.index', compact('peliculas'));
})->name('series');
