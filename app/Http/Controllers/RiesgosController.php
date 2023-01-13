<?php

namespace App\Http\Controllers;

use App\Models\Riesgo;
use Illuminate\Http\Request;

class RiesgosController extends Controller
{
    public function show($id)
    {
        $riesgos = Riesgo::find($id);
        return view('riesgos.show',compact('riesgos'));
    }
}
