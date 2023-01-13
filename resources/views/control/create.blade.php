@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Controles propuestos" />
<x-cab2 texto="Nuevo control propuesto" />

{!! Form::open(['route' => 'control.store']) !!}
<div class="container-fluid">
  <div class="row">
    <div class="col-9 my-1">
        {!! Form::label('Nombre','Control:') !!}
        {!! Form::text('Nombre',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-1">
        {!! Form::label('Responsable','Responsable:') !!}
        {!! Form::text('Responsable',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-12 my-1">
        {!! Form::label('Descripcion','Descripción:') !!}
        {!! Form::text('Descripcion',NULL,['class'=>'form-control']) !!}
    </div>



    <div class="col-3 my-4">
        {!! Form::label('Preventivo','Preventivo:') !!}
        {!! Form::checkbox('Preventivo', 1,null,['class'=>'form-check-input']) !!}
    </div>
    <div class="col-3 my-4">
        {!! Form::label('Detectivo','Detectivo:') !!}
        {!! Form::checkbox('Detectivo', 1,null,['class'=>'form-check-input']) !!}
    </div>
    <div class="col-6 my-4">
        {!! Form::label('Normativo','Normativo:') !!}
        {!! Form::checkbox('Normativo', 1,null,['class'=>'form-check-input']) !!}
    </div>

    <div class="col-3 my-1">
        {!! Form::label('Afectaprobabilidad','Afecta probabilidad:') !!}
        {!! Form::select('Afectaprobabilidad', ['Si' => 'Si', 'No' => 'No'],NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-1">
        {!! Form::label('Afectaimpacto','Afecta impacto:') !!}
        {!! Form::select('Afectaimpacto', ['Si' => 'Si', 'No' => 'No'],NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-2">
        {!! Form::label('Fechainicio','Fecha de inicio:') !!}
        {!! Form::date('Fechainicio',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-2">
        {!! Form::label('Fechafin','Fecha de fin:') !!}
        {!! Form::date('Fechafin',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-1">
        {!! Form::label('Periodicidadrevision','Periodicidad revisión:') !!}
        {!! Form::select('Periodicidadrevision', ['Si' => 'Si', 'No' => 'No'],NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-1">
        {!! Form::label('Resultadoimplantacion','Resultado implantacion:') !!}
        {!! Form::select('Resultadoimplantacion', ['Si' => 'Si', 'No' => 'No'],NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-1">
        {!! Form::label('Controldocumentado','Control documentado:') !!}
        {!! Form::select('Controldocumentado', ['Si' => 'Si', 'No' => 'No'],NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-3 my-2">
        {!! Form::label('Fechaseguimiento','Fecha de seguimiento:') !!}
        {!! Form::date('Fechaseguimiento',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-12 my-2">
        {!! Form::label('Sugerencias','Sugerencias:') !!}
        {!! Form::textarea('Sugerencias',NULL,['class'=>'form-control','rows' => '4']) !!}
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
