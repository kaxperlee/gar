@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Seguimiento/Controles actuales" />
<x-cab2 texto="Show" />
{!! Form::model($actual) !!}

<div class="d-flex  mb-3">
    <a type="button" href="{{route('seguimiento.show', [$actual->seguimiento_id,'acl'])}}" class="me-auto btn btn-primary btn-sm me-2"><i class="fa-solid fa-circle-chevron-left"></i> Volver</a>
    <a type="button" href="{{route('riesgo.destroy', $actual)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
    <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
    <a type="button" href="{{route('riesgo.edit', $actual)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
</div>

<div class="px-3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my-2">
                {!! Form::label('Nombre','Actividad de riesgo:') !!}
                {!! Form::textarea('Nombre',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none', 'readonly']) !!}
            </div>
        </div>
    </div>
</div>
{!! Form::hidden('id',NULL) !!}
{!! Form::close() !!}





@endsection
