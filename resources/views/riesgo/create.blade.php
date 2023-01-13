@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Actividades de riesgo" />
<x-cab2 texto="Nueva actividad de riesgo" />

{!! Form::open(['route' => 'riesgo.store']) !!}
<div class="container-fluid">
  <div class="row">
    <div class="col-12 my-1">
        {!! Form::label('Nombre','Control:') !!}
        {!! Form::text('Nombre',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-6 my-1">
        {!! Form::label('Descripcion','Descripción:') !!}
        {!! Form::text('Descripcion',NULL,['class'=>'form-control']) !!}
    </div>
    <div class="col-6 my-1">
        {!! Form::label('Estado','Estado:') !!}
        {!! Form::text('Estado',NULL,['class'=>'form-control']) !!}
    </div>

    <div class="col-12 my-3">
        <button class="btn btn-primary btn-sm" type="submit"><i class="fa-regular fa-floppy-disk"></i> Guardar</button>
        <a type="button" href="{{route('seguimiento.show', [$seguimiento->id,'act'])}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-ban"></i> Cancelar</a>
    </div>
    {!! Form::hidden('seguimiento_id',$seguimiento->id) !!}
    {!! Form::close() !!}
  </div>
</div>


</form>

@endsection
