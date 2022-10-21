<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\SeguimientoController;

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
Route::get('storage-link', function(){
	if (file_exists(public_path('storage'))) {
		return 'The "public/storage" directory already exists.';
	}
	app('files')->link(
		storage_path('app/public'), public_path('storage')
	);
	return 'The [public/storage] directory has been linked.';
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', [InicioController::class, 'index'])->name('index');
Route::middleware(['auth:sanctum', 'verified'])->get('/codigos/create/{id}', [InicioController::class, 'create'])->name('codigos.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/codigos', [InicioController::class, 'store'])->name('codigos.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/grupo/{idCodigo}', [InicioController::class, 'grupo'])->name('codigos.grupo');
Route::middleware(['auth:sanctum', 'verified'])->get('/codigos/{id}', [InicioController::class, 'show'])->name('codigos.show');

Route::middleware(['auth:sanctum', 'verified'])->delete('/files/destroy/{id}', [ FilesController::class, 'destroy'])->name('files.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/files/download/{id}', [ FilesController::class, 'download'])->name('files.download');

Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias', [IncidenciasController::class, 'index'])->name('incidencias.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/create/{id}', [IncidenciasController::class, 'create'])->name('incidencias.create');
Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias', [IncidenciasController::class, 'store'])->name('incidencias.store');
Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias/fileform', [IncidenciasController::class, 'fileform'])->name('incidencias.fileform');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/{id}', [IncidenciasController::class, 'show'])->name('incidencias.show');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/edit/{id}', [IncidenciasController::class, 'edit'])->name('incidencias.edit');
Route::middleware(['auth:sanctum', 'verified'])->put('/incidencias/update', [IncidenciasController::class, 'update'])->name('incidencias.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/delete/{id}', [IncidenciasController::class, 'destroy'])->name('incidencias.destroy');

//Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/{id}/{tab}', [SeguimientoController::class, 'show2'])->name('seguimiento.show2');

Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/edit/{id}', [SeguimientoController::class, 'edit'])->name('seguimiento.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/delete/{id}', [SeguimientoController::class, 'destroy'])->name('seguimiento.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento', [SeguimientoController::class, 'index'])->name('seguimiento.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/{id}/{tab?}', [SeguimientoController::class, 'show'])->name('seguimiento.show');

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
