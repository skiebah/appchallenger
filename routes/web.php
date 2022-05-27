<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\PersonajesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/personajes',[PersonajesController::class, 'index'])->name('personajes');
Route::get('/personajes/{id}',[PersonajesController::class, 'detalle'])->name('personajes.detalle');
Route::post('/personajesDT',[PersonajesController::class, 'personajesDT'])->name('personajesDT');
