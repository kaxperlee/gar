<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Incidencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
    public function destroy($file,Request $request)
    {

        $delete = File::find($file)->delete();
        $incidencias = Incidencia::find($request->id);

        return redirect()->route('incidencias.show',$incidencias);

    }
    public function download($file){

        $file = File::find($file);
        $ruta = str_replace("storage", "public", $file->Ruta);
        //return $ruta;
        //return Storage::url($ruta);
        return Storage::download($ruta);

    }
}
