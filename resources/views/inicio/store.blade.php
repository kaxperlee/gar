@extends('layouts.main')

@section('sidebar')
   
    <x-sb-codigos />
       
@endsection

@section('main')
<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
<table class="table table-hover" width="100%">
    <tr>
        <th>Grupo</th>
        <th>Nombre</th>
        <th>Epígrafe</th>
        <th>Descripción</th>
    </tr>
@foreach ($codigos as $codigo)
    <tr>
        <td>{{ $codigo->idCodigo }}</td>
        <td><a href="{{route('codigos.show', ['id' =>$codigo->id])}}">{{ $codigo->Codigo }}</a></td>
        <td>{{ $codigo->Epigrafe }}</td>
        <td>{{ $codigo->Descripcion }}</td>
    </tr>
@endforeach
@endsection
