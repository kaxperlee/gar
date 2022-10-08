@extends('layouts.main')

@section('sidebar')
   
    <x-sb-codigos />
       
@endsection

@section('main')
<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
<form action="">
<div class="container text-center">
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
    <div class="col"><label for="Ident. Riesgo">Id. Riesgo</label>
    <input type="idriesgo"></div></div>
    <div class="col">Column</div>
    <div class="col">Column</div>
    <div class="col"> <button type="submit">Guardar</button></div>
  </div>
</div>
    
   
</form>




@endsection
<h1>CReate: {{$id}}</h1>