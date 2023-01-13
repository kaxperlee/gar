@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Incidencias" />
<x-cab2 texto="Bùsqueda ()" />
<table class="table table-hover" width="100%">
    <tr>
        <th>Grupo</th>
        <th>Nombre</th>
        <th>Epígrafe</th>
        <th>Descripción</th>
    </tr>
@foreach ($codigos as $codigo)
    <tr>
        <td>{{ $codigo->Epigrafe }}</td>
        <td><a href="{{route('codigos.show', ['id' =>$codigo->id])}}">{{ $codigo->Delito }}</a></td>
        <td>{{ $codigo->Codigo }}</td>
        <td>{{ $codigo->Descripcion }}</td>
    </tr>
@endforeach
@endsection
