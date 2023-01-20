<?php

namespace App\Http\Controllers;

use App\Models\Actividadesriesgo;
use App\Models\Actual;
use App\Models\Calificacion;
use App\Models\Control;
use App\Models\Delito;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Incidencia;
use App\Models\Manejo;

class SeguimientoController extends Controller
{
    public function index()
    {
        $seguimientos = Seguimiento::all();
        return view('seguimiento.index',['seguimientos' => $seguimientos]);
    }

    public function show($id,$tab='exp')
    {
        $tabulador['exp'] = '';
        $tabulador['act'] = '';
        $tabulador['acl'] = '';
        $tabulador['mon'] = '';
        $tabulador['fil'] = '';
        $tabulador[$tab] = 'show active';

        $seguimiento = Seguimiento::find($id);


        $actividadesriesgos = ""; //Actividadesriesgo::where('id_Seguimiento',$seguimientos->id)->get();
        $controls = ""; //Control::where('id_Seguimiento',$seguimientos->id)->get();

        //$files =  File::where('id_Codigo',$incidencias->id)->get();

        return view('seguimiento.show', compact('seguimiento','actividadesriesgos','controls','tabulador'));
    }

    public function search(Request $request){

        $busqueda = explode ( ' ', $request->riesgo);

        $delitos = Delito::select('id','Epigrafe','Delito','Codigo','Descripcion');

        foreach ($busqueda as $id){
            $delitos->where('Codigo', 'LIKE', '%'.$id.'%');
        }

        $delitos = $delitos->get();

        return view('seguimiento.search', compact('delitos','busqueda'));
    }

    public function edit($id){
       // return $id;
        $seguimiento = Seguimiento::find($id);
        $manejos = Manejo::pluck('Nombre','id');
        $calificacions = Calificacion::pluck('Nombre','id');
       return view('seguimiento.edit',compact('seguimiento','manejos','calificacions'));
    }

    public function create($id){
        // return $id;
        $delito = Delito::find($id);
        $manejos = Manejo::pluck('Nombre','id');
        $calificacions = Calificacion::pluck('Nombre','id');
       return view('seguimiento.create',compact('delito','manejos','calificacions'));

    }

    public function store(Request $request){

        //return $request->all();
        $seguimiento = new Seguimiento();
        $seguimiento->delito_id = $request->id;
        $seguimiento->manejo_id = $request->manejo_id;
        $seguimiento->calificacion_id = $request->calificacion_id;
        $seguimiento->Observaciones = $request->Observaciones;
        $seguimiento->Fecha = $request->Fecha;

        $seguimiento->save();

        //return $seguimiento;
        return redirect()->route('seguimiento.index');
    }

    public function update(Request $request, Seguimiento $seguimiento){

        $seguimiento = Seguimiento::find($request->id);
        //return $request->all();
        $seguimiento->update(['Fecha' => $request->Fecha, 'manejo_id' => $request->manejo_id, 'calificacion_id' => $request->calificacion_id,
        'Observaciones' =>  $request->Observaciones]);
        return redirect()->route('seguimiento.show',$request->id);
    }

    public function destroy($id){
        $seguimiento = Seguimiento::find($id);

       $deleted = Seguimiento::where('id',$seguimiento->id)->delete();
        return redirect()->route('seguimiento.index',$seguimiento->seguimiento_id);
    }

    public function delete($id){

        $seguimiento = Seguimiento::find($id);

        return view('seguimiento.delete', compact('seguimiento'));
    }
}
