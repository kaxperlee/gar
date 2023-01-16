<?php

namespace App\Http\Controllers;

use App\Models\Control;
use App\Models\Seguimiento;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    public function show($id)
    {
        $control = Control::find($id);


        return view('control.show', compact('control'));
    }

    public function create($id)
    {
        $seguimiento = Seguimiento::find($id);

        return view('control.create',compact('seguimiento'));

    }

    public function store(Request $request)
    {
        //return $request->all();
        $control = new Control();
        $control->Nombre = $request->Nombre;
        $control->Responsable = $request->Responsable;
        $control->Descripcion = $request->Descripcion;
        $control->Preventivo = $request->Preventivo;
        $control->Detectivo = $request->Detectivo;
        $control->Normativo = $request->Normativo;
        $control->seguimiento_id = $request->seguimiento_id;

        $control->Afectaprobabilidad = $request->Afectaprobabilidad;
        $control->Afectaimpacto = $request->Afectaimpacto;
        $control->Fechainicio = $request->Fechainicio;
        $control->Fechafin = $request->Fechafin;
        $control->Periodicidadrevision = $request->Periodicidadrevision;
        $control->Resultadoimplantacion = $request->Resultadoimplantacion;
        $control->Fechaseguimiento = $request->Fechaseguimiento;
        $control->Sugerencias = $request->Sugerencias;

        $control->save();
        return redirect()->route('seguimiento.show', $request->seguimiento_id);
        //return $incidencia;
    }

    public function edit($id) {

        $control = Control::find($id);

        return view('control.edit', compact('control'));

    }

    public function update(Request $request, Control $control){

        $control = Control::find($request->id);
        //$incidencia->update($request->all());
        $control->update(['Nombre' => $request->Nombre]);
        return redirect()->route('control.show',$request->id);
    }

    public function destroy($id){
        $control = Control::find($id);

       $deleted = Control::where('id',$control->id)->delete();
        return redirect()->route('seguimiento.show',[$control->seguimiento_id,'mon']);
    }
}
