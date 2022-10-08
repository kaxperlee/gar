<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\DocumentosController;
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
/*
Route::get('/', function () {
    return view('inicio.index');
});
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/', [InicioController::class, 'index'])->name('index');
Route::middleware(['auth:sanctum', 'verified'])->get('/codigos/create/{id}', [InicioController::class, 'create'])->name('codigos.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/codigos', [InicioController::class, 'store'])->name('codigos.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/codigos/{id}', [InicioController::class, 'show'])->name('codigos.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias', [IncidenciasController::class, 'index']);
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/create/{id}', [IncidenciasController::class, 'create'])->name('incidencias.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias', [IncidenciasController::class, 'store'])->name('incidencias.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/{id}', [IncidenciasController::class, 'show'])->name('incidencias.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/informes', [InformesController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/documentos', [DocumentosController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
