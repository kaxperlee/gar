<?php

namespace App\Http\Controllers;

use App\Models\Actual;
use App\Models\Clasecontrol;
use App\Models\Seguimiento;
use Illuminate\Http\Request;

class ControlactualController extends Controller
{

    public function show($id)
    {
        $actual = Actual::find($id);


        return view('actual.show', compact('actual'));
    }

    public function create($id)
    {
        $seguimiento = Seguimiento::find($id);

        $clasecontrol = Clasecontrol::pluck('Nombre','id');

        return view('actual.create',compact('seguimiento','clasecontrol'));

    }

    public function store(Request $request)
    {
        //return $request->all();
        $actual = new Actual();
        $actual->Nombre = $request->Nombre;
        $actual->clasecontrol_id = $request->clasecontrol_id;
        $actual->Responsable = $request->Responsable;
        $actual->Descripcion = $request->Descripcion;
        $actual->Preventivo = $request->Preventivo;
        $actual->Detectivo = $request->Detectivo;
        $actual->Normativo = $request->Normativo;
        $actual->seguimiento_id = $request->seguimiento_id;
        echo "<h2> Check: ".$request->Preventivo."</h2>";
        $actual->save();
        return redirect()->route('seguimiento.show', $request->seguimiento_id);
        //return $incidencia;
    }

    public function edit($id) {

        $actual = Actual::find($id);

        return view('actual.edit', compact('actual'));

    }
    public function update(Request $request, Actual $control){

        $actual = Actual::find($request->id);
        //$incidencia->update($request->all());
        $actual->update(['Nombre' => $request->Nombre]);
        return redirect()->route('actual.show',$request->id);
    }

    public function destroy($id){
        $actual = Actual::find($id);

       $deleted = Actual::where('id',$actual->id)->delete();
        return redirect()->route('seguimiento.show',[$actual->seguimiento_id,'act']);
    }
}
