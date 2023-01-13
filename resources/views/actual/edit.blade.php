@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Seguimiento/Controles actuales" />
<x-cab2 texto="Edit" />

{!! Form::model($actual,['route' => ['actual.update',$actual],'method'=>'put']) !!}
<div class="d-flex  mb-3">
    <a type="button" href="{{route('actual.show', $actual)}}" class="me-auto btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Volver</a>
    <button type="submit"  class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
    <a type="button" href="{{route('actual.show', $actual)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Cancelar</a>
</div>

<div class="px-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-2">
                {!! Form::label('Nombre','Actividad de riesgo:') !!}
                {!! Form::textarea('Nombre',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::hidden('id',NULL) !!}
{!! Form::close() !!}





@endsection
