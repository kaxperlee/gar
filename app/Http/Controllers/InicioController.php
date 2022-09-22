<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $codigos = DB::table('codigos')->orderBy('id','asc')->get();

        //var_dump($clientes);
 
        return view('inicio.index', ['codigos' => $codigos]);
    }
}
