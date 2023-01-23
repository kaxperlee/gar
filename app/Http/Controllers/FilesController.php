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

    public function delete($file)
    {
        return $file;
        $file = File::find($file);
        //$incidencias = Incidencia::find($request->id);
        return $file;
        return redirect()->route('incidencias.index');

    }
    public function download($file){

        $file = File::find($file);
        $ruta = str_replace("storage", "public", $file->Ruta);
        //return $ruta;
        //return Storage::url($ruta);
        return Storage::download($ruta,$file->Nombre);

    }

    public function fileform(Request $request)
    {
        $id = $request->id;
        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files/'.$id);

        $array = explode('public',$path);

        //return $request;

        $save = new File();
        $save->Nombre = $name;
        $save->Descripcion = $request->Descripcion;
        $save->fileable_id = $request->id;
        $save->fileable_type = $request->fileable_type;
        $save->Ruta = 'storage'.$array[1];
       // return $request->link;
        $save->save();

        return redirect()->route($request->link.'.show',[$id,'fil']);
        //return $incidencia;
    }
}
