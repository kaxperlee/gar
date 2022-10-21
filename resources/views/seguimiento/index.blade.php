@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection
@section('main')
<x-cab1 texto="Seguimiento" />
<x-cab2 texto="Seguimiento reciente" />
<table class="table table-hover" width="100%">
    <tr>
        <th width="15">Ref.: </th>
        <th>Riesgo: </th>
        <th>Fecha:</th>
        <th>Descripción</th>
        <th>Remitente</th>
        <th width="10" colspan="2"></th>

    </tr>
@foreach ($seguimientos as $seguimiento)
    <tr>
        <td>{{ $seguimiento->id }}</td>
        <td>{{ $seguimiento->Epigrafe}}</td>
        <td>{{ $seguimiento->Fecha }}</td>
        <td><a href="{{route('seguimiento.show',[$seguimiento,''])}}">{{ $seguimiento->Descripcion }}</a></td>
        <td>{{ $seguimiento->Remitente }}</td>
        <td><a href="{{route('seguimiento.index')}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
        <td><a href="{{route('seguimiento.index')}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
@endforeach
</table>
@endsection

