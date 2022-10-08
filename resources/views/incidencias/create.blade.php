@extends('layouts.main')

@section('sidebar')
   
    <x-sb-codigos />
       
@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />
<form method="POST" action="{{route('incidencias.store')}}">
    @csrf 
<div class="container">
  <div class="row">
    <div class="col-3 my-2">
        <label for="idCodigo">idCodigo</label><br>
        <input  class="form-control" type="text" name="idCodigo" value="{{$codigos->idCodigo}}">
    </div>
    <div class="col-3 my-2">
        <label for="epigrafe">Epigrafe</label><br>
        <input  class="form-control" type="text" name="epigrafe" value="{{$codigos->Epigrafe}}">
    </div>
    <div class="col-3 my-2">
        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
        <input class="form-control" type="date" name="fecha" >
    </div>
    <div class="col-3 my-2">
        <label for="caracter">Caracter</label><br>
        <select id="caracter" name="caracter" class="form-select">
            <option>Normal</option>
            <option>Urgente</option>
         </select>
    </div>
    <div class="col-12 my-2">
        <label for="codigo">Codigo</label><br>
        <input class="form-control" widt="100%" type="text" name="codigo" value="{{$codigos->idCodigo2}}">
    </div>
    <div class="col-6 my-2">
        <label for="descripcion">Descripción:</label><br>
        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
        
    </div>
    <div class="col-6 my-2">
        <label for="riesgoa">Riesgo afectado / Conducta delictiva:</label><br>
        <textarea style='resize: none;' name="riesgoa" class="form-control" id="riesgoa" rows="3"></textarea>
    </div>

    <div class="col-6 my-2">
        <label for="informara">Informar a:</label><br>
        <input class="form-control" type="text" name="informara" value="">
    </div>
    <div class="col-6 my-2">
        <label for="remitente">Remitente:</label><br>
        <input class="form-control" type="text" name="remitente" value="">
    </div>
    
    <div class="col-3 my-2">
        <label for="canal">Canal:</label><br>
        <select id="canal" name="canal" class="form-select">
            <option>E-Mail</option>
            <option>Papel</option>
            <option>Fax</option>
            <option>Otro</option>
         </select>
        
    </div>
    <div class="col-3 my-2">
        <label for="fechat">Fecha de tramitación:</label><br>
        <input class="form-control" type="date" name="fechat" value="">
    </div>
    <div class="col-3 my-2">
        <label for="propuesta">Propuesta:</label><br>
        <input class="form-control" type="text" name="propuesta" value="">
    </div>
    <div class="col-3 my-2">
        <label for="nivelrp">Nivel de riesgo penal:</label><br>
        <input class="form-control" type="text" name="nivelrp" value="">
    </div>
    <div class="col-6 my-2">
        <label for="comunicara">Comunicar a autoridades:</label><br>
        <textarea style='resize: none;' name="comunicara" class="form-control" id="comunicara" rows="3"></textarea>
        
    </div>
    <div class="col-6 my-2">
        <label for="autoria">Autoría:</label><br>
        <textarea style='resize: none;' name="autoria" class="form-control" id="autoria" rows="3"></textarea>
    </div>
    <div class="col-6 my-2">
        <label for="observaciones">Observaciones:</label><br>
        <textarea style='resize: none;' name="observaciones" class="form-control" id="observaciones" rows="3"></textarea>
        
    </div>
    <div class="col-6 my-2">
        <label for="propuestas">Propuestas:</label><br>
        <textarea style='resize: none;' name="propuestas" class="form-control" id="propuestas" rows="3"></textarea>
    </div>
    <div class="col-12 my-2">
        <label for="formFile" class="form-label">Ficheros: </label>
        <input class="form-control" name="formFile" type="file" id="formFile">
        <div id="formFile" class="form-text">Selecciona un fichero.</div>
    </div>
   

    <div class="col my-2"> 
        <button class="btn btn-primary" type="submit">Guardar</button>
    </div>
  </div>
</div>
    
   
</form>




@endsection
