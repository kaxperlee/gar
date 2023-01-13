@extends('layouts.main')

@section('sidebar')

    <x-sb-seguimiento />

@endsection

@section('main')
<x-cab1 texto="Delito" />
<x-cab2 texto="Bùsqueda ()" />
<table class="table table-hover" width="100%">
    <tr>
        <th>Epigrafe</th>
        <th>Código</th>
        <th>Delito</th>
        <th>Nº Incidencias</th>
    </tr>
@foreach ($delitos as $delito)
    <tr>
        <td>{{ $delito->Epigrafe }}</td>
        <td>{{ $delito->Codigo }}</td>
        <td><a href="{{route('incidencias.create', $delito->id)}}">{{ $delito->Delito }}</a></td>
        <td>@if ($delito->Incidencias){{$delito->Incidencias->count()}} @endif</td>
    </tr>
@endforeach
@endsection
