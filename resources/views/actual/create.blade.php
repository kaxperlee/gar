@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Control actual" />
<x-cab2 texto="Control actual nuevo" />

{!! Form::open(['route' => 'actual.store']) !!}
<div class="container-fluid">
  <div class="row">
    <div class="col-12 my-1">
        {!! Form::label('Nombre','Control:') !!}
        {!! Form::text('Nombre',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-6 my-1">
        {!! Form::label('Responsable','Responsable:') !!}
        {!! Form::text('Responsable',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-6 my-1">
        {!! Form::label('clasecontrol_id','Clase de control:') !!}
        {!! Form::select('clasecontrol_id',$clasecontrol,NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-12 my-1">
        {!! Form::label('Descripcion','Descripción:') !!}
        {!! Form::text('Descripcion',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-2 my-1">
        {!! Form::label('Preventivo','Preventivo:') !!}
        {!! Form::checkbox('Preventivo', 1) !!}
    </div>
    <div class="col-2 my-1">
        {!! Form::label('Detectivo','Detectivo:') !!}
        {!! Form::checkbox('Detectivo', 1) !!}
    </div>
    <div class="col-8 my-1">
        {!! Form::label('Normativo','Normativo:') !!}
        {!! Form::checkbox('Normativo', 1) !!}
    </div>

    <div class="col my-3">
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
    {!! Form::hidden('seguimiento_id',$seguimiento->id) !!}
    {!! Form::close() !!}
  </div>
</div>


</form>


@endsection


