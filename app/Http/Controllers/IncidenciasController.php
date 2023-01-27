<?php

namespace App\Http\Controllers;

use App\Models\Canal;
use App\Models\Caracter;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Delito;
use App\Models\File;
use App\Models\Incidencia;
use App\Models\Informe;
use Illuminate\Support\Facades\Storage;
use PDF;

//use function GuzzleHttp\Promise\all;

class IncidenciasController extends Controller
{
    public function fede(){
        return "HOla";
    }

    public function index($filtro='')
    {

        $codigo = Incidencia::all();
        return view('incidencias.index',['codigos' => $codigo]);
    }

    public function search(Request $request){
        $busqueda = explode ( ' ', $request->riesgo);

        $delitos = Delito::select('id','Epigrafe','Delito','Codigo','Descripcion');

        foreach ($busqueda as $id){
            $delitos->where('Codigo', 'LIKE', '%'.$id.'%');
        }

        $delitos = $delitos->get();

        return view('incidencias.search', compact('delitos','busqueda'));
    }

    public function create($id)
    {
        $caracter = Caracter::pluck('Nombre','id');
        $canal = Canal::pluck('Nombre','id');
        //$codigos = Codigo::where('id',$id)->get();
        $delito = Delito::find($id);
        return view('incidencias.create',compact('delito','caracter','canal'));

    }

    public function store(Request $request)
    {
        //return $request->all();
        $incidencia = new Incidencia();
        $incidencia->Fecha = $request->Fecha;
        $incidencia->delito_id = $request->delito_id;
        $incidencia->caracter_id = $request->caracter_id;
        $incidencia->Descripcion = $request->Descripcion;
        $incidencia->RiesgoA = $request->RiesgoA;
        $incidencia->InformarA = $request->InformarA;
        $incidencia->Remitente = $request->Remitente;
        $incidencia->canal_id = $request->canal_id;
        $incidencia->FechaT = $request->FechaT;
        $incidencia->Propuesta = $request->Propuesta;
        $incidencia->NivelRP = $request->NivelRP;
        $incidencia->ComunicarA = $request->ComunicarA;
        $incidencia->Autoria = $request->Autoria;
        $incidencia->Observaciones = $request->Observaciones;
        $incidencia->Propuestas = $request->Propuestas;
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

        //return $request;

        $save = new File();
        $save->Nombre = $name;
        $save->Descripcion = $request->Descripcion;
        $save->fileable_id = $request->id;
        $save->fileable_type = 'App\Models\Incidencia';
        $save->Ruta = 'storage'.$array[1];

        $save->save();

        return redirect()->route('incidencias.show',$id);
        //return $incidencia;
    }


    public function show($id,$tab='inc')
    {
        $tabulador['inc'] = '';
        $tabulador['fil'] = '';
        $tabulador['inf'] = '';
        $tabulador[$tab] = 'show active';

        $incidencia = Incidencia::find($id);

        $informes = Informe::where('id_incidencia',$id)->get();

        return view('incidencias.show', compact('incidencia','informes','tabulador'));
    }

    public function edit($id) {

        $caracter = Caracter::pluck('Nombre','id');
        $canal = Canal::pluck('Nombre','id');
        $incidencia = Incidencia::find($id);


        return view('incidencias.edit', compact('incidencia','caracter','canal'));
       // return "<h1>Edit: ".$id."</h1>";
    }

    public function update(Request $request, Incidencia $incidencia){

        $incidencia = Incidencia::find($request->id);
        //$incidencia->update($request->all());
        $incidencia->update(['Fecha' => $request->Fecha, 'caracter_id' => $request->caracter_id, 'canal_id' => $request->canal_id,
        'Descripcion' =>  $request->Descripcion,'RiesgoA' =>  $request->RiesgoA,'InformarA' =>  $request->InformarA, 'Remitente' => $request->Remitente,
        'FechaT' => $request->FechaT, 'Propuesta' => $request->Propuesta, 'NivelRP' => $request->NivelRP, 'ComunicarA' => $request->ComunicarA,
        'Autoria' => $request->Autoria, 'Observaciones' => $request->Observaciones, 'Propuestas' => $request->Propuestas]);
        return redirect()->route('incidencias.show',$request->id);
    }
    public function destroy($id){
        $incidencias = Incidencia::find($id);

       $deleted = Incidencia::where('id',$incidencias->id)->delete();
        return redirect()->route('incidencias.index',$incidencias->incidencia_id);
    }

    public function delete($id){

        $incidencia = Incidencia::find($id);

        return view('incidencias.delete', compact('incidencia'));
    }

    public function deletes(){

        $codigo = Incidencia::all();
        return view('incidencias.index',['codigos' => $codigo]);
    }

    public function storeinforme(Request $request){
        $informe = new Informe();
        $informe->id_incidencia = $request->id_incidencia;
        $informe->Obs = $request->Obs;
        $informe->Fecha = date("Y-m-d");
        $informe->save();

        $informes = Informe::where('id_incidencia',$request->id_incidencia)->get();
        //$fiestas = Evento::all();
        //$fecha = "2023";
        //$pdf = PDF::loadView('incidencias.informe', compact('informe','informes'));
        //return view("calendario/informe", compact('fecha'));
        //return $pdf->download('CalendarioLaboral2023.pdf');
        $pdf = PDF::loadView('incidencias.informe', ['informe' => $informe,'informes' => $informes])->download()->getOriginalContent();
        Storage::disk('public')->put('informes/'.$informe->id.'.pdf', $pdf);


        //return $pdf->save('/informes/my_stored_file.pdf')->stream('download.pdf');

        return redirect()->route('incidencias.show', $request->id_incidencia);
    }
}
