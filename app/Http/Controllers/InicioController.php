<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Codigo;

class InicioController extends Controller
{
    public function index()
    {
        $codigos = Codigo::all();
        
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

        $codigos = Codigo::select('id','Epigrafe','Codigo','idCodigo', 'Descripcion');

        foreach ($riesgo as $id){
            $codigos->where('Codigo', 'LIKE', '%'.$id.'%');
        }

        $code = $codigos->get();

        //$codigos = Codigo::where('Codigo', 'LIKE', '%'.$riesgo.'%')->get();
        //return $request->all();
        return view('inicio.store',['codigos' => $code, 'busqueda' => $codigos]);
    }

    public function grupo($idCodigo)
    {
        $codigos = Codigo::where('idCodigo',$idCodigo)->get();
        //return $codigos;
        return view('inicio.grupo', ['codigos' => $codigos, 'idCodigo' => $idCodigo]);
    }

    public function show($id)
    {
        $codigos = Codigo::where('id',$id)->get();
        return view('inicio.show', ['codigos' => $codigos, 'id' => $id]);
    }
    
}
