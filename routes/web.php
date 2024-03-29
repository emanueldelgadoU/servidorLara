<?php

use App\Http\Controllers\IncidenciaController;
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

Route::get('/hola', function () {
    return view('hola');
});

//Mostrar todas las insidencias
Route::get('/incidencias', [IncidenciaController::class, 'index']);

Route::get('/incidencia/{id}', [IncidenciaController::class, 'show']);




