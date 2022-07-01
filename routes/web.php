<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personaController;
use App\Http\Controllers\tarjetaController;
use App\Http\Controllers\unidadController;
use App\Http\Controllers\personaunidadController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Ruta para el controlador personaController
Route::resource('personas', personaController::class);
//Ruta para el controlador tarjetacontroller
Route::resource('tarjetas', tarjetaController::class);
//Ruta para el controlador unidadcontroller
Route::resource('unidades', unidadController::class);
//Ruta para el controlador unidadcontroller
Route::resource('personaunidad', personaunidadController::class);
