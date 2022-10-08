<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Codigo;
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


    public function show($id)
    {
        $incidencia = Incidencia::find($id);
        return view('incidencias.show', compact('incidencia'));
    }
}
