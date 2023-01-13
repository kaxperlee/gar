@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
<table class="table table-hover" width="100%">
    <tr>
        <th>Id</th>
        <th>Grupo</th>
        <th>Nombre</th>
        <th>Epígrafe</th>
        <th>Descripción</th>
    </tr>
@foreach ($codigos as $codigo)
    <tr>
        <td>{{ $codigo->id }}</td>
        <td>{{ $codigo->Epigrafe }}</td>
        <td><a href="{{route('incidencias.create', ['id' => $id])}}">{{ $codigo->Delito }}</a></td>
        <td>{{ $codigo->Codigo }}</td>
        <td>{{ $codigo->Descripcion }}</td>
    </tr>
@endforeach
@endsection
