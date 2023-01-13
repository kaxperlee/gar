<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Delito;

class InicioController extends Controller
{
    public function index()
    {
        $codigos = Delito::all();

        return view('inicio.index', ['codigos' => $codigos]);
    }

    public function create($id)
    {
        return view('inicio.create',['id' => $id]);
    }

    public function store(Request $request)
    {
        //$riesgo = $request->riesgo;
        $riesgo = explode ( ' ', $request->riesgo);

        $codigos = Delito::select('id','Epigrafe','Delito','Codigo', 'Descripcion');

        foreach ($riesgo as $id){
            $codigos->where('Delito', 'LIKE', '%'.$id.'%');
        }

        $code = $codigos->get();

        //$codigos = Codigo::where('Codigo', 'LIKE', '%'.$riesgo.'%')->get();
        //return $request->all();
        return view('inicio.store',['codigos' => $code, 'busqueda' => $codigos]);
    }

    public function grupo($idCodigo)
    {
        $codigos = Delito::where('idCodigo',$idCodigo)->get();
        //return $codigos;
        return view('inicio.grupo', ['codigos' => $codigos, 'idCodigo' => $idCodigo]);
    }

    public function show($id)
    {
        $codigos = Delito::where('id',$id)->get();
        return view('inicio.show', ['codigos' => $codigos, 'id' => $id]);
    }

}
