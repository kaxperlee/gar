@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')
<x-cab1 texto="Riesgos" />
<x-cab2 texto="Alta control" />

{!! Form::model($delito, ['route' => ['seguimiento.store',$delito]]) !!}
<div class="container">
  <div class="row">
    <div class="col-6 my-2">
        {!! Form::label('Epigrafe','Epigrafe:') !!}
        {!! Form::text('Epigrafe',$delito->Epigrafe,['class'=>'form-control','readonly']) !!}
    </div>
    <div class="col-6 my-2">
        {!! Form::label('Codigo','Código:') !!}
        {!! Form::text('Codigo',$delito->Codigo,['class'=>'form-control','readonly']) !!}
    </div>

    <div class="col-12 my-2">
        {!! Form::label('Delito','Delito:') !!}
        {!! Form::text('Delito',$delito->Delito,['class'=>'form-control','readonly']) !!}
    </div>
    <div class="col-12 my-2">
        {!! Form::label('Descripcion','Descripción:') !!}
        {!! Form::textarea('Descripcion',$delito->Descripcion,['class'=>'form-control','rows' => '4','readonly']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('Fecha','Fecha:') !!}
        {!! Form::date('Fecha',null,['class'=>'form-control']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('manejo_id','Manejo riesgo:') !!}
        {!! Form::select('manejo_id',$manejos,NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('calificacion_id','Calificacion nivel riesgo:') !!}
        {!! Form::select('calificacion_id',$calificacions,NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-12 my-2">
        {!! Form::label('Observaciones','Observaciones:') !!}
        {!! Form::textarea('Observaciones',null,['class'=>'form-control','rows' => '2']) !!}
    </div>
        {!! Form::hidden('id',$delito->id,NULL) !!}
    <div class="col my-2">
        <button class="btn btn-primary" type="submit">Alta en Seguimiento</button>
    </div>
  </div>
</div>
</form>

@endsection
