@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
<table class="table table-hover" width="100%">
    <tr>
        <th width="15">Epigrafe: </th>
        <th>Fecha:</th>
        <th>Descripción</th>
        <th>Remitente</th>
        <th width="10" colspan="2"></th>

    </tr>
@foreach ($codigos as $codigo)
    <tr>
        <td>{{ $codigo->Delito->Epigrafe}}</td>
        <td>{{ $codigo->Fecha }}</td>
        <td><a href="{{route('incidencias.show',$codigo)}}">{{ $codigo->Descripcion }}</a></td>
        <td>{{ $codigo->Remitente }}</td>
        <td><a href="{{route('incidencias.edit', $codigo->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
        <td><a href="{{route('incidencias.delete', $codigo->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
@endforeach
</table>
@endsection
