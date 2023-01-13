@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Seguimiento/Controles propuestos" />
<x-cab2 texto="Edit" />

{!! Form::model($control,['route' => ['control.update',$control],'method'=>'put']) !!}
<div class="d-flex  mb-3">
    <a type="button" href="{{route('control.show', $control)}}" class="me-auto btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Volver</a>
    <button type="submit"  class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</button>
    <a type="button" href="{{route('control.show', $control)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Cancelar</a>
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
