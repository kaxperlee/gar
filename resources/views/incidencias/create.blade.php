@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />


{!! Form::open(['route' => 'incidencias.store']) !!}
<div class="container-fluid">
  <div class="row">
    <div class="col-2 my-1">
        {!! Form::label('Epigrafe','Epigrafe:') !!}
        {!! Form::text('Epigrafe',$delito->Epigrafe,['class'=>'form-control','readonly']) !!}
    </div>
    <div class="col-10 my-2">
        {!! Form::label('Delito','Delito:') !!}
        {!! Form::text('Delito',$delito->Delito,['class'=>'form-control','readonly']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('Fecha','Fecha:') !!}
        {!! Form::date('Fecha',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('caracter_id','Caracter:') !!}
        {!! Form::select('caracter_id',$caracter,NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('canal_id','Canal:') !!}
        {!! Form::select('canal_id',$canal,NULL,['class'=>'form-control']) !!}
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

    <div class="col-4 my-2">
        {!! Form::label('FechaT','Fecha de tramitación:') !!}
        {!! Form::date('FechaT',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-4 my-2">
        {!! Form::label('Propuesta','Propuesta:') !!}
        {!! Form::text('Propuesta',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-4 my-2">
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

    <div class="col-12 my-2">
        <label for="formFile" class="form-label">Ficheros: </label>
        <input class="form-control" name="formFile" type="file" id="formFile">
        <div id="formFile" class="form-text">Selecciona un fichero.</div>
    </div>

    <div class="col my-2">
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
    {!! Form::hidden('delito_id',$delito->id) !!}
    {!! Form::close() !!}
  </div>
</div>


</form>




@endsection
