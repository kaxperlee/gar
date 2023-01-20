@extends('layouts.main')

@section('sidebar')

    <x-sb-seguimiento />

@endsection
@section('main')
<x-cab1 texto="Seguimiento" />
<x-cab2 texto="Seguimiento reciente" />
<div class="d-flex flex-row-reverse mb-3">
    <form action="{{route('seguimiento.search')}}" method="POST">@csrf
        <div class="btn-group">
            <input class="form-control" type="text" name="riesgo"><input type="submit" name="mysubmit" value="Añadir seguimiento"  class="btn btn-primary btn-sm" />
        </div>
    </form>
</div>
<table class="table table-hover" width="100%">
    <tr>
        <th width="15">Ref.: </th>
        <th>Epígrafe: </th>
        <th>Fecha:</th>
        <th>Delito:</th>
        <th>Manejo riesgo:</th>
        <th>Calificación nivel riesgo: </th>
        <th colspan="2"></th>

    </tr>
@foreach ($seguimientos as $seguimiento)
    <tr>
        <td>{{ $seguimiento->id }}</td>
        <td>{{ $seguimiento->Delito->Epigrafe}}</td>
        <td>{{ $seguimiento->Fecha }}</td>
        <td><a href="{{route('seguimiento.show',$seguimiento)}}">{{ $seguimiento->Delito->Delito }}</a></td>
        <td>{{ $seguimiento->Manejo->Nombre }}</td>
        <td>{{ $seguimiento->Calificacion->Nombre }}</td>
        <td><a href="{{route('seguimiento.edit', $seguimiento->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
        <td><a href="{{route('seguimiento.delete', $seguimiento->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
    </tr>
@endforeach
</table>


@endsection

