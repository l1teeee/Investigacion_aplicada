<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/personas', 'App\Http\Controllers\PersonaController@index');//MOSTRAR REGISTROS
Route::post('/personas', 'App\Http\Controllers\PersonaController@store');//CREAR REGISTROS
Route::put('/personas/{id}', 'App\Http\Controllers\PersonaController@update');
Route::delete('/personas/{id}', 'App\Http\Controllers\PersonaController@destroy');

