@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />

<div class="d-flex flex-row-reverse mb-3">
    <a type="button" href="{{route('incidencias.destroy', $incidencias)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
    <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
    <a type="button" href="{{route('incidencias.edit', $incidencias)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
</div>


<div class="px-3">
<div class="container-fluid">
  <div class="row">
    <div class="col-3 my-2">
        <label for="idCodigo">idCodigo</label><br>
        <input  class="form-control" type="text" name="idCodigo" value="{{$incidencias->id}}" readonly>
    </div>
    <div class="col-3 my-2">
        <label for="epigrafe">Epigrafe</label><br>
        <input  class="form-control" type="text" name="epigrafe" value="{{$incidencias->Epigrafe}}" readonly>
    </div>
    <div class="col-3 my-2">
        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
        <input class="form-control" type="date" name="fecha" value="{{$incidencias->Fecha}}" readonly>
    </div>
    <div class="col-3 my-2">
        <label for="caracter">Caracter</label><br>
        <input class="form-control" type="text" name="fecha" value="{{$incidencias->Caracter}}" readonly>
    </div>
    <div class="col-12 my-2">
        <label for="Codigo">Codigo</label><br>
        <input class="form-control" widt="100%" type="text" name="Codigo"  value="{{$incidencias->Codigo}}" readonly>
    </div>
    <div class="col-6 my-2">
        <label for="descripcion">Descripción:</label><br>
        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="3"  readonly>{{$incidencias->Descripcion}}</textarea>

    </div>
    <div class="col-6 my-2">
        <label for="riesgoa">Riesgo afectado / Conducta delictiva:</label><br>
        <textarea style='resize: none;' name="riesgoa" class="form-control" id="riesgoa" rows="3" readonly>{{$incidencias->RiesgoA}}</textarea>
    </div>

    <div class="col-6 my-2">
        <label for="informara">Informar a:</label><br>
        <input class="form-control" type="text" name="informara"  value="{{$incidencias->InformarA}}" readonly >
    </div>
    <div class="col-6 my-2">
        <label for="remitente">Remitente:</label><br>
        <input class="form-control" type="text" name="remitente"  value="{{$incidencias->Remitente}}" readonly >
    </div>

    <div class="col-3 my-2">
        <label for="canal">Canal:</label><br>
        <input class="form-control" type="text" name="remitente"  value="{{$incidencias->Canal}}" readonly >

    </div>
    <div class="col-3 my-2">
        <label for="fechat">Fecha de tramitación:</label><br>
        <input class="form-control" type="date" name="fechat"  value="{{$incidencias->FechaT}}" readonly >
    </div>
    <div class="col-3 my-2">
        <label for="propuesta">Propuesta:</label><br>
        <input class="form-control" type="text" name="propuesta"  value="{{$incidencias->Propuesta}}" readonly >
    </div>
    <div class="col-3 my-2">
        <label for="nivelrp">Nivel de riesgo penal:</label><br>
        <input class="form-control" type="text" name="nivelrp"  value="{{$incidencias->NivelRP}}" readonly >
    </div>
    <div class="col-6 my-2">
        <label for="comunicara">Comunicar a autoridades:</label><br>
        <textarea style='resize: none;' name="comunicara" class="form-control" id="comunicara" rows="3" readonly>{{$incidencias->ComunicarA}}</textarea>

    </div>
    <div class="col-6 my-2">
        <label for="autoria">Autoría:</label><br>
        <textarea style='resize: none;' name="autoria" class="form-control" id="autoria" rows="3" readonly>{{$incidencias->Autoria}}</textarea>
    </div>
    <div class="col-6 my-2">
        <label for="observaciones">Observaciones:</label><br>
        <textarea style='resize: none;' name="observaciones" class="form-control" id="observaciones" rows="3" readonly>{{$incidencias->Observaciones}}</textarea>

    </div>
    <div class="col-6 my-2">
        <label for="propuestas">Propuestas:</label><br>
        <textarea style='resize: none;' name="propuestas" class="form-control" id="propuestas" rows="3" readonly>{{$incidencias->Propuestas}}</textarea>
    </div>
    <div class="d-flex flex-row-reverse mt-3">
        <a type="button" href="{{route('incidencias.destroy', $incidencias)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
        <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
        <a type="button" href="{{route('incidencias.edit', $incidencias)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
    </div>
</div>
</div>
<div class="p-1">
    <div class="col-12 my-4">
        <div class="h-100 p-5 bg-light border rounded-3">
        <h5 class="">Ficheros</h5>
        @foreach ($files as $file)
        <form method="POST" action="{{route('files.destroy',$file)}}">
            <div class="input-group mb-3">
                <a href="{{route('files.download',['id' => $file->id])}}" class="btn btn-primary">Ver {{$file->id}}</a>
                <input type="text" class="form-control" value="{{$file->Nombre}}" readonly aria-describedby="button-addon2">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{$incidencias->id}}">
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
            </div>
        </form>
        @endforeach
            <h5 class="mt-5">Añadir fichero</h5>
            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{route('incidencias.fileform')}}">
                <div class="container">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{$incidencias->id}}">
                        <div class="col-12 my-2">
                            <input class="form-control" type="file" name="file" id="file" placeholder="Selecciona un fichero">
                        </div>
                        <div class="col-2 my-2">
                            <label for="formFile" class="form-label"> </label>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





@endsection
