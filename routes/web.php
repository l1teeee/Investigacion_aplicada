<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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


Route::get('/profile', function () {
    return view('profile');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\PersonaController::class, 'persona']);

Route::delete('/personas/{id}', [App\Http\Controllers\PersonaController::class, 'destroy'])->name('personas.destroy');

Route::put('/personas/{id}', [App\Http\Controllers\PersonaController::class, 'update'])->name('personas.update');

Route::resource('persona', PersonaController::class);



