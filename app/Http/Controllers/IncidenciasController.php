<?php

namespace App\Http\Controllers;

use App\Models\AuxCanal;
use App\Models\AuxCaracter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Codigo;
use App\Models\File;
use App\Models\Incidencia;

class IncidenciasController extends Controller
{
    public function index($filtro='')
    {

        $codigo = Incidencia::all();
        return view('incidencias.index',['codigos' => $codigo]);
    }

    public function create($id)
    {
        //$codigos = Codigo::where('id',$id)->get();
        $codigos = Codigo::find($id);
        return view('incidencias.create',['codigos' => $codigos]);

    }

    public function store(Request $request)
    {
        $incidencia = new Incidencia();
        $incidencia->idCodigo = $request->idCodigo;
        $incidencia->Epigrafe = $request->epigrafe;
        $incidencia->Fecha = $request->fecha;
        $incidencia->Codigo = $request->codigo;
        $incidencia->Caracter = $request->caracter;
        $incidencia->Descripcion = $request->descripcion;
        $incidencia->RiesgoA = $request->riesgoa;
        $incidencia->InformarA = $request->informara;
        $incidencia->Remitente = $request->remitente;
        $incidencia->Canal = $request->canal;
        $incidencia->FechaT = $request->fechat;
        $incidencia->Propuesta = $request->propuesta;
        $incidencia->NivelRP = $request->nivelrp;
        $incidencia->ComunicarA = $request->comunicara;
        $incidencia->Autoria = $request->autoria;
        $incidencia->Observaciones = $request->observaciones;
        $incidencia->Propuestas = $request->propuestas;
        $incidencia->save();
        return redirect()->route('incidencias.show', $incidencia);
        //return $incidencia;
    }

    public function fileform(Request $request)
    {
        $id = $request->id;
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files/'.$id);

        $array = explode('public',$path);

        $save = new File();
        $save->Nombre = $name;
        $save->id_Codigo = $request->id;
        $save->Ruta = 'storage'.$array[1];

        $save->save();
        
        return redirect()->route('incidencias.show',$id);
        //return $incidencia;
    }


    public function show($id)
    {
        $incidencias = Incidencia::find($id);
        $files =  File::where('id_Codigo',$incidencias->id)->get();
        
        return view('incidencias.show', compact('incidencias','files'));
    }

    public function edit($id) {

        $caracter = AuxCaracter::pluck('Caracter','idCaracter');
        $canal = AuxCanal::pluck('Canal','idCanal');
        $incidencias = Incidencia::find($id);
        $files =  File::where('id_Codigo',$incidencias->id)->get();

        return view('incidencias.edit', compact('incidencias','files','caracter','canal'));
       // return "<h1>Edit: ".$id."</h1>";
    }
    
    public function update(Request $request){
        
        $incidencias = Incidencia::find($request->id);
        $incidencias->update($request->all());
        return redirect()->route('incidencias.show',$request->id);
    }
    public function destroy($id) {
        return "<h1>Delete: ".$id."</h1>";
    }
}
