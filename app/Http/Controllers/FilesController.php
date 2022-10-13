<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Incidencia;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function destroy($file,Request $request)
    {
        
        $delete = File::find($file)->delete();
        $incidencias = Incidencia::find($request->id);
        
        return redirect()->route('incidencias.show',$incidencias);

    }
}
