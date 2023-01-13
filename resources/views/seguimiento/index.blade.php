@extends('layouts.main')

@section('sidebar')

    <x-sb-seguimiento />

@endsection
@section('main')
<x-cab1 texto="Seguimiento" />
<x-cab2 texto="Seguimiento reciente" />
<table class="table table-hover" width="100%">
    <tr>
        <th width="15">Ref.: </th>
        <th>Epígrafe: </th>
        <th>Fecha:</th>
        <th>Delito:</th>
        <th>Manejo riesgo:</th>
        <th>Calificación nivel riesgo: </th>

    </tr>
@foreach ($seguimientos as $seguimiento)
    <tr>
        <td>{{ $seguimiento->id }}</td>
        <td>{{ $seguimiento->Delito->Epigrafe}}</td>
        <td>{{ $seguimiento->Fecha }}</td>
        <td><a href="{{route('seguimiento.show',$seguimiento)}}">{{ $seguimiento->Delito->Delito }}</a></td>
        <td>{{ $seguimiento->Manejo->Nombre }}</td>
        <td>{{ $seguimiento->Calificacion->Nombre }}</td>

    </tr>
@endforeach
</table>
@endsection

