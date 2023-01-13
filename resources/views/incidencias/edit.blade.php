@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />



<div class="px-3">
{!! Form::model($incidencia,['route' => ['incidencias.update',$incidencia],'method'=>'put']) !!}

<div class="d-flex flex-row-reverse mb-3">
    <button type="submit"  class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Actualizar</button>
    <a type="button" href="{{route('incidencias.show', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-arrows-rotate"></i> Cancelar</a>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-2 my-2">
            {!! Form::setModel($incidencia['Delito']) !!}
            {!! Form::label('epigrafe','Epigrafe:') !!}
            {!! Form::text('Epigrafe',NULL,['class'=>'form-control','readonly']) !!}
        </div>
        <div class="col-10 my-2">
            {!! Form::setModel($incidencia['Delito']) !!}
            {!! Form::label('Delito','Delito:') !!}
            {!! Form::text('Delito',NULL,['class'=>'form-control','readonly']) !!}
        </div>
        <div class="col-4 my-2">
            {!! Form::setModel($incidencia) !!}
            {!! Form::label('fecha','Fecha:') !!}
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
            {!! Form::setModel($incidencia) !!}
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
    </div>
</div>
<div class="d-flex flex-row-reverse mt-3">
    <button type="submit"  class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-ban"></i> Actualizar</button>
    <a type="button" href="{{route('incidencias.show', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-arrows-rotate"></i> Cancelar</a>
</div>
{!! Form::hidden('id',NULL) !!}
{!! Form::close() !!}
</div>



<div class="px-4">
    <div class="col-12 my-4">
        <div class="h-100 p-5 bg-light border rounded-3">
        <h5 class="">Ficheros</h5>
        @foreach ($files as $file)
        <form method="POST" action="{{route('files.destroy',$file)}}">
            <div class="input-group mb-3">
                <a href="{{route('files.download',['id' => $file->id])}}" class="btn btn-primary">Ver {{$file->id}}</a>
                <input type="text" class="form-control" value="{{$file->Nombre}}" readonly aria-describedby="button-addon2">
                @csrf
                @method('delete')
                <input type="hidden" name="id" value="{{$incidencia->id}}">
                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
            </div>
        </form>
        @endforeach
            <h5 class="mt-5">Añadir fichero</h5>
            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{route('incidencias.fileform')}}">
                <div class="container">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{$incidencia->id}}">
                        <div class="col-12 my-2">
                            <input class="form-control" type="file" name="file" id="file" placeholder="Selecciona un fichero">
                        </div>
                        <div class="col-2 my-2">
                            <label for="formFile" class="form-label"> </label>
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
