@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Incidencias" />
<x-cab2 texto="Eliminar incidencia" />

<div class="alert alert-success" role="alert">
    <p>¿Estas seguro que quieres eliminar la incidencia?</p>
    <p><strong>{{$incidencia->id}} - {{$incidencia->Descripcion}}</strong></p>

</div>
<div class="d-flex  mb-3">
    <a type="button" href="{{route('incidencias.destroy', $incidencia->id)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Entendido</a>
    <a type="button" href="{{route('incidencias.index')}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Cancelar</a>
</div>

@endsection
