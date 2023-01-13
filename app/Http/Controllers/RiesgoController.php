<?php

namespace App\Http\Controllers;

use App\Models\Riesgo;
use App\Models\Seguimiento;
use Illuminate\Http\Request;

class RiesgoController extends Controller
{
    public function show($id)
    {
        $riesgo = Riesgo::find($id);


        return view('riesgo.show', compact('riesgo'));
    }

    public function create($id)
    {
        $seguimiento = Seguimiento::find($id);

        return view('riesgo.create',compact('seguimiento'));

    }

    public function store(Request $request)
    {
        //return $request->all();
        $riesgo = new Riesgo();
        $riesgo->Nombre = $request->Nombre;
        $riesgo->Descripcion = $request->Descripcion;
        $riesgo->Estado = $request->Estado;
        $riesgo->seguimiento_id = $request->seguimiento_id;
        $riesgo->save();
        return redirect()->route('seguimiento.show',[$riesgo->seguimiento_id,'act']);
        //return $incidencia;
    }

    public function edit($id) {

        $riesgo = Riesgo::find($id);

        return view('riesgo.edit', compact('riesgo'));

    }

    public function update(Request $request, Riesgo $riesgo){

        $riesgo = Riesgo::find($request->id);
        //$incidencia->update($request->all());
        $riesgo->update(['Nombre' => $request->Nombre]);
        return redirect()->route('riesgo.show',$request->id);
    }

    public function destroy($id){
        $riesgo = Riesgo::find($id);

       $deleted = Riesgo::where('id',$riesgo->id)->delete();
        return redirect()->route('seguimiento.show',[$riesgo->seguimiento_id,'act']);
    }
}
