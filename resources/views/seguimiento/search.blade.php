@extends('layouts.main')

@section('sidebar')

    <x-sb-seguimiento />

@endsection

@section('main')
<x-cab1 texto="Delito" />
<x-cab2 texto="Bùsqueda ()" />
<table class="table table-hover" width="100%">
    <tr>
        <th>Epigrafe</th>
        <th>Código</th>
        <th>Delito</th>

    </tr>
@foreach ($delitos as $delito)
    <tr>
        <td>{{ $delito->Epigrafe }}</td>
        <td>{{ $delito->Codigo }}</td>
        <td>
            @if ($delito->Seguimiento) {{ $delito->Delito }}
            @else <a href="{{route('seguimiento.create', $delito->id)}}">{{ $delito->Delito }}</a>
            @endif
        </td>

    </tr>
@endforeach
@endsection
