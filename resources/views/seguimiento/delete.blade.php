@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Seguimiento" />
<x-cab2 texto="Eliminar seguimiento" />

<div class="alert alert-success" role="alert">
    <p>¿Estas seguro que quieres eliminar el seguimiento al delito?</p>
    <p><strong>{{$seguimiento->Delito->Epigrafe}} - {{$seguimiento->Delito->Delito}}</strong></p>
    <p>Se eliminara el seguimiento y todos sus controles</p> 
</div>
<div class="d-flex  mb-3">
    <a type="button" href="{{route('seguimiento.destroy', $seguimiento->id)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Entendido</a>
    <a type="button" href="{{route('seguimiento.index')}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Cancelar</a>
</div>

@endsection