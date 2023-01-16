@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />

<div class="d-flex flex-row-reverse mb-3">
    <a type="button" href="{{route('incidencias.delete', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
    <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
    <a type="button" href="{{route('incidencias.edit', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
</div>


<div class="px-3">
<div class="container-fluid">
  <div class="row">
    <div class="col-2 my-2">
        <label for="epigrafe">Epigrafe: </label><br>
        <input  class="form-control" type="text" name="epigrafe" value="{{$incidencia->Delito->Epigrafe}}" readonly>
    </div>
    <div class="col-10 my-2">
        <label for="Codigo">Delito: </label><br>
        <input class="form-control" widt="100%" type="text" name="Codigo"  value="{{$incidencia->Delito->Delito}}" readonly>
    </div>
    <div class="col-4 my-2">
        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
        <input class="form-control" type="date" name="fecha" value="{{$incidencia->Fecha}}" readonly>
    </div>
    <div class="col-4 my-2">
        <label for="caracter">Caracter</label><br>
        <input class="form-control" type="text" name="fecha" value="{{$incidencia->Caracter->Nombre}}" readonly>
    </div>
    <div class="col-4 my-2">
        <label for="canal">Canal:</label><br>
        <input class="form-control" type="text" name="remitente"  value="{{$incidencia->Canal->Nombre}}" readonly >

    </div>
    <div class="col-6 my-2">
        <label for="descripcion">Descripción:</label><br>
        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="3"  readonly>{{$incidencia->Descripcion}}</textarea>

    </div>
    <div class="col-6 my-2">
        <label for="riesgoa">Riesgo afectado / Conducta delictiva:</label><br>
        <textarea style='resize: none;' name="riesgoa" class="form-control" id="riesgoa" rows="3" readonly>{{$incidencia->RiesgoA}}</textarea>
    </div>

    <div class="col-6 my-2">
        <label for="informara">Informar a:</label><br>
        <input class="form-control" type="text" name="informara"  value="{{$incidencia->InformarA}}" readonly >
    </div>
    <div class="col-6 my-2">
        <label for="remitente">Remitente:</label><br>
        <input class="form-control" type="text" name="remitente"  value="{{$incidencia->Remitente}}" readonly >
    </div>


    <div class="col-4 my-2">
        <label for="fechat">Fecha de tramitación:</label><br>
        <input class="form-control" type="date" name="fechat"  value="{{$incidencia->FechaT}}" readonly >
    </div>
    <div class="col-4 my-2">
        <label for="propuesta">Propuesta:</label><br>
        <input class="form-control" type="text" name="propuesta"  value="{{$incidencia->Propuesta}}" readonly >
    </div>
    <div class="col-4 my-2">
        <label for="nivelrp">Nivel de riesgo penal:</label><br>
        <input class="form-control" type="text" name="nivelrp"  value="{{$incidencia->NivelRP}}" readonly >
    </div>
    <div class="col-6 my-2">
        <label for="comunicara">Comunicar a autoridades:</label><br>
        <textarea style='resize: none;' name="comunicara" class="form-control" id="comunicara" rows="3" readonly>{{$incidencia->ComunicarA}}</textarea>

    </div>
    <div class="col-6 my-2">
        <label for="autoria">Autoría:</label><br>
        <textarea style='resize: none;' name="autoria" class="form-control" id="autoria" rows="3" readonly>{{$incidencia->Autoria}}</textarea>
    </div>
    <div class="col-6 my-2">
        <label for="observaciones">Observaciones:</label><br>
        <textarea style='resize: none;' name="observaciones" class="form-control" id="observaciones" rows="3" readonly>{{$incidencia->Observaciones}}</textarea>

    </div>
    <div class="col-6 my-2">
        <label for="propuestas">Propuestas:</label><br>
        <textarea style='resize: none;' name="propuestas" class="form-control" id="propuestas" rows="3" readonly>{{$incidencia->Propuestas}}</textarea>
    </div>
    <div class="d-flex flex-row-reverse mt-3">
        <a type="button" href="{{route('incidencias.destroy', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
        <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
        <a type="button" href="{{route('incidencias.edit', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
    </div>
</div>
</div>

<div class="p-1">
    <div class="col-12 my-4">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h5 class="mb-3"><strong>Informes</strong></h5>
            @foreach ($informes as $informe)
            <form method="POST" action="{{route('files.destroy',$informe)}}">
                <div class="input-group mb-3">
                    <a href="{{route('files.download',['id' => $informe->id])}}" class="btn btn-primary">Ver {{$informe->id}}</a>
                    <input type="text" class="form-control" value="{{$informe->Obs}}" readonly aria-describedby="button-addon2">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$informe->id}}">
                    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                </div>
            </form>
            @endforeach
            <h5 class="mt-5">Añadir informe</h5>
            <form method="POST" action="{{route('incidencias.store')}}">
                @csrf
                <input type="hidden" name="id_incidencia" value="{{$incidencia->id}}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="input-group col-6 mb-3">
                            <span class="input-group-text" id="Obs">Crear informe: </span>
                            <input type="text" name="Obs" class="form-control" id="Obs" aria-describedby="Obs">
                            <button type="submit"  class="btn btn-primary me-2"><i class="fa-solid fa-plus"></i> Aceptar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="p-1">
    <div class="col-12 my-4">
        <div class="h-100 p-5 bg-light border rounded-3">
        <h5 class=""><strong>Ficheros</strong></h5>
        @foreach ($files as $file)
        <form method="POST" action="{{route('files.destroy',$file)}}">
            <div class="input-group mb-3">
                <a href="{{route('files.download',['id' => $file->id])}}" class="btn btn-primary">Ver {{$file->id}}</a>
                <input type="text" class="form-control" value="{{$file->Nombre}}" readonly aria-describedby="button-addon2">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{$incidencia->id}}">
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
            </div>
        </form>
        @endforeach
            <h5 class="mt-5">Añadir fichero</h5>
            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{route('incidencias.fileform')}}">
                <div class="container">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{$incidencia->id}}">
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
