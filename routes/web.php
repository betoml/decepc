<?php

use App\Http\Controllers\Frontend\AdminUsersController;
use App\Http\Controllers\Frontend\BusquedaController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\SeriesDetailController;
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


Route::get('/peliculas', function () {
    $token = session('token');
    $peliculas = Http::withToken($token)->get('https://euforia-films.up.railway.app/api/peliculas');


    return view('peliculas.index', compact('peliculas'));
})->name('peliculas');

Route::get('/p/{code}', function ($code) {
    $token = session('token');
    $peliculas = Http::withToken($token)->post('https://euforia-films.up.railway.app/api/peliculas-detail', [
        'id_thmdb' => $code
    ]);

    return view('pelicula-detail.index', compact('peliculas'));
})->name('pelicula.show');


Route::get('/s/{code}',[SeriesDetailController::class, 'index'])->name('series.show');

Route::get('/player', function () {
    return view('videoplayer.videoplayer');
})->name('videoplayer');


Route::get('/buscar', [BusquedaController::class, 'buscar'])->name('buscar');

Route::get('/admin/users', [AdminUsersController::class, 'index']);


Route::post('/admin/register', [AdminUsersController::class, 'register']);
