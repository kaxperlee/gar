@extends('layouts.main')

@section('sidebar')
   
    <x-sb-codigos />
       
@endsection

@section('main')
<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
<table class="table table-hover" width="100%">
    <tr>
        <th>Referencia: </th>
        <th>Riesgo: </th>
        <th>Fecha:</th>
        <th>Descripción</th>
        <th>Remitente</th>
    </tr>
@foreach ($codigos as $codigo)
    <tr>
        <td>{{ $codigo->id }}</td>
        <td>{{ $codigo->Epigrafe}}</td>
        <td>{{ $codigo->Fecha }}</td>
        <td><a href="{{route('incidencias.show',$codigo)}}">{{ $codigo->Descripcion }}</a></td>
        <td>{{ $codigo->Remitente }}</td>
    </tr>
@endforeach
@endsection