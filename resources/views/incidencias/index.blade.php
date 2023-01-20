@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Incidencias" />
<x-cab2 texto="Listado de incidencias" />

<div class="d-flex flex-row-reverse mb-3">
    <form action="{{route('incidencias.search')}}" method="POST">@csrf
        <div class="btn-group">
            <input class="form-control btn-sm" type="text" name="riesgo"><input type="submit" name="mysubmit" value="Añadir incidencia"  class="btn btn-primary btn-sm" />
        </div>
    </form>
</div>

<table class="table table-hover" width="100%">
    <tr>
        <th width="15">Epigrafe: </th>
        <th>Fecha:</th>
        <th>Descripción</th>
        <th>Remitente</th>
        <th>Estado</th>
        <th width="10" colspan="2"></th>

    </tr>
@foreach ($codigos as $codigo)
    <tr>
        <td>{{ $codigo->Delito->Epigrafe}}</td>
        <td>{{ $codigo->Fecha }}</td>
        <td><a href="{{route('incidencias.show',$codigo)}}">{{ $codigo->Descripcion }}</a></td>
        <td>{{ $codigo->Remitente }}</td>
        <td><span type="button"  class="btn btn-success btn-sm" style='padding-top:0.15rem;padding-bottom:0.15rem'>Abierto</span> </td>
        <td><a href="{{route('incidencias.edit', $codigo->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
        <td><a href="{{route('incidencias.delete', $codigo->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
@endforeach
</table>

<div class="container" style='margin-bottom:80px'></div>
@endsection


