<?php

namespace App\Http\Controllers;

use App\Models\Actividadesriesgo;
use App\Models\Control;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use App\Models\File;

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
        $tabulador['mon'] = '';
        $tabulador['fil'] = '';
        $tabulador[$tab] = 'active';

        $seguimientos = Seguimiento::find($id);
        $actividadesriesgos = Actividadesriesgo::where('id_Seguimiento',$seguimientos->id)->get();
        $controls = Control::where('id_Seguimiento',$seguimientos->id)->get();
        $files = File::where('id_Codigo',$id)->where('Tipo','seguimiento')->get();
        //$files =  File::where('id_Codigo',$incidencias->id)->get();

        return view('seguimiento.show', compact('seguimientos','actividadesriesgos','controls','files','tabulador'));
    }

    public function show2($id,$tab='hola'){

        $tabulador['exp'] = '';
        $tabulador['act'] = '';
        $tabulador['mon'] = '';
        $tabulador['fil'] = '';
        if($tab=='hola'){$tabulador['exp'] = 'active';} else {$tabulador[$tab] = 'active';}
        $seguimientos = Seguimiento::find($id);
        $actividadesriesgos = Actividadesriesgo::where('id_Seguimiento',$seguimientos->id)->get();
        $controls = Control::where('id_Seguimiento',$seguimientos->id)->get();
        $files = File::where('id_Codigo',$id)->where('Tipo','seguimiento')->get();
        //$files =  File::where('id_Codigo',$incidencias->id)->get();

        //return $tabulador;
        return view('seguimiento.show', compact('seguimientos','actividadesriesgos','controls','files','tabulador'));
    }
}
