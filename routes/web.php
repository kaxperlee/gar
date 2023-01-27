<?php

use App\Http\Controllers\ControlactualController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\ControlsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\InformesController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\RiesgoController;
use App\Http\Controllers\RiesgosController;
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
Route::middleware(['auth:sanctum', 'verified'])->get('/files/delete/{id}', [ FilesController::class, 'delete'])->name('files.delete');
Route::middleware(['auth:sanctum', 'verified'])->get('/files/download/{id}', [ FilesController::class, 'download'])->name('files.download');
Route::middleware(['auth:sanctum', 'verified'])->post('/files/fileform', [FilesController::class, 'fileform'])->name('files.fileform');

Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/edit/{id}', [IncidenciasController::class, 'edit'])->name('incidencias.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/delete/{id}', [IncidenciasController::class, 'delete'])->name('incidencias.delete');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/destroy/{id}', [IncidenciasController::class, 'destroy'])->name('incidencias.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias', [IncidenciasController::class, 'index'])->name('incidencias.index');
Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias/search', [IncidenciasController::class, 'search'])->name('incidencias.search');
Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias', [IncidenciasController::class, 'store'])->name('incidencias.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/create/{id}', [IncidenciasController::class, 'create'])->name('incidencias.create');
Route::middleware(['auth:sanctum', 'verified'])->put('/incidencias/update', [IncidenciasController::class, 'update'])->name('incidencias.update');
//Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias/fileform', [IncidenciasController::class, 'fileform'])->name('incidencias.fileform');
Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/{id}/{tab?}', [IncidenciasController::class, 'show'])->name('incidencias.show');
//Route::middleware(['auth:sanctum', 'verified'])->get('/incidencias/fede', [IncidenciasController::class, 'fede'])->name('incidencias.fede');
Route::middleware(['auth:sanctum', 'verified'])->post('/incidencias/pdf', [IncidenciasController::class, 'storeinforme'])->name('incidencias.storeinforme');

//Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/{id}/{tab}', [SeguimientoController::class, 'show2'])->name('seguimiento.show2');

Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/edit/{id}', [SeguimientoController::class, 'edit'])->name('seguimiento.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/delete/{id}', [SeguimientoController::class, 'delete'])->name('seguimiento.delete');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/destroy/{id}', [SeguimientoController::class, 'destroy'])->name('seguimiento.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento', [SeguimientoController::class, 'index'])->name('seguimiento.index');
Route::middleware(['auth:sanctum', 'verified'])->post('/seguimiento/search', [SeguimientoController::class, 'search'])->name('seguimiento.search');
Route::middleware(['auth:sanctum', 'verified'])->post('/seguimiento', [SeguimientoController::class, 'store'])->name('seguimiento.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/create/{id}', [SeguimientoController::class, 'create'])->name('seguimiento.create');
Route::middleware(['auth:sanctum', 'verified'])->put('/seguimiento/update/{id}', [SeguimientoController::class, 'update'])->name('seguimiento.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/select/{id}', [SeguimientoController::class, 'select'])->name('seguimiento.select');
Route::middleware(['auth:sanctum', 'verified'])->get('/seguimiento/{id}/{tab?}', [SeguimientoController::class, 'show'])->name('seguimiento.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/actual/edit/{id}', [ControlactualController::class, 'edit'])->name('actual.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/actual/delete/{id}', [ControlactualController::class, 'delete'])->name('actual.delete');
Route::middleware(['auth:sanctum', 'verified'])->get('/actual/destroy/{id}', [ControlactualController::class, 'destroy'])->name('actual.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/actual/create/{id}', [ControlactualController::class, 'create'])->name('actual.create');
Route::middleware(['auth:sanctum', 'verified'])->put('/actual/update/{id}', [ControlactualController::class, 'update'])->name('actual.update');
Route::middleware(['auth:sanctum', 'verified'])->post('/actual', [ControlactualController::class, 'store'])->name('actual.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/actual/{id}/{tab?}', [ControlactualController::class, 'show'])->name('actual.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/control/edit/{id}', [ControlController::class, 'edit'])->name('control.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/control/delete/{id}', [ControlController::class, 'delete'])->name('control.delete');
Route::middleware(['auth:sanctum', 'verified'])->get('/control/destroy/{id}', [ControlController::class, 'destroy'])->name('control.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/control/create/{id}', [ControlController::class, 'create'])->name('control.create');
Route::middleware(['auth:sanctum', 'verified'])->put('/control/update/{id}', [ControlController::class, 'update'])->name('control.update');
Route::middleware(['auth:sanctum', 'verified'])->post('/control', [ControlController::class, 'store'])->name('control.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/control/{id}/{tab?}', [ControlController::class, 'show'])->name('control.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/riesgo/edit/{id}', [RiesgoController::class, 'edit'])->name('riesgo.edit');
Route::middleware(['auth:sanctum', 'verified'])->get('/riesgo/delete/{id}', [RiesgoController::class, 'delete'])->name('riesgo.delete');
Route::middleware(['auth:sanctum', 'verified'])->get('/riesgo/destroy/{id}', [RiesgoController::class, 'destroy'])->name('riesgo.destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('/riesgo/create/{id}', [RiesgoController::class, 'create'])->name('riesgo.create');
Route::middleware(['auth:sanctum', 'verified'])->put('/riesgo/update/{id}', [RiesgoController::class, 'update'])->name('riesgo.update');
Route::middleware(['auth:sanctum', 'verified'])->post('/riesgo', [RiesgoController::class, 'store'])->name('riesgo.store');
Route::middleware(['auth:sanctum', 'verified'])->get('/riesgo/{id}/{tab?}', [RiesgoController::class, 'show'])->name('riesgo.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/informes', [InformesController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/documentos', [DocumentosController::class, 'index']);

//Route::middleware(['auth:sanctum', 'verified'])->get('/riesgos/{id}' , [RiesgosController::class, 'show'])->name('riesgos.show');

//Route::middleware(['auth:sanctum', 'verified'])->get('/controls/{id}' , [ControlsController::class, 'show'])->name('controls.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
