@extends('layouts.main')

@section('sidebar')
   
    <x-sb-codigos />
       
@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
{!! Form::model($incidencias,['route' => ['incidencias.update',$incidencias],'method'=>'put']) !!}
<div class="container">
    <div class="row">
        <div class="col-3 my-2">
            {!! Form::label('id','id:') !!}
            {!! Form::text('id',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-3 my-2">
            {!! Form::label('epigrafe','Epigrafe:') !!}
            {!! Form::text('Epigrafe',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-3 my-2">
            {!! Form::label('fecha','Fecha:') !!}
            {!! Form::date('Fecha',NULL,['class'=>'form-control']) !!}
        </div>
        
        <div class="col-3 my-2">
            {!! Form::label('Caracter','Caracter:') !!}
            {!! Form::select('Caracter',$caracter,NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-12 my-2">
            {!! Form::label('codigo','Codigo:') !!}
            {!! Form::text('Codigo',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Descripcion','Descripcion:') !!}
            {!! Form::textarea('Descripcion',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('RiesgoA','Riesgo afectado / Conducta delictiva:') !!}
            {!! Form::textarea('RiesgoA',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('InformarA','Informar a:') !!}
            {!! Form::text('InformarA',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Remitente','Remitente:') !!}
            {!! Form::text('Remitente',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-3 my-2">
            {!! Form::label('Canal','Canal:') !!}
            {!! Form::select('Canal',$canal,NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-3 my-2">
            {!! Form::label('FechaT','Fecha de tramitación:') !!}
            {!! Form::date('FechaT',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-3 my-2">
            {!! Form::label('Propuesta','Propuesta:') !!}
            {!! Form::text('Propuesta',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-3 my-2">
            {!! Form::label('NivelRP','Nivel de riesgo penal:') !!}
            {!! Form::text('NivelRP',NULL,['class'=>'form-control']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('ComunicarA','Comunicar a autoridades:') !!}
            {!! Form::textarea('ComunicarA',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Autoria','Autoría:') !!}
            {!! Form::textarea('Autoria',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Observaciones','Observaciones:') !!}
            {!! Form::textarea('Observaciones',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
        </div>
        <div class="col-6 my-2">
            {!! Form::label('Propuestas','Propuestas:') !!}
            {!! Form::textarea('Propuestas',NULL,['class'=>'form-control','rows'=>'3', 'style'=>'resize: none']) !!}
        </div>
        <div class="col my-2"> 
            {!!  Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
        </div>
    </div>
</div>

{!! Form::close() !!}





@endsection
