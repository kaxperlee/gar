@extends('layouts.main')

@section('sidebar')
   
    <x-sb-codigos />
       
@endsection

@section('main')

<x-cab1 texto="Riesgos" />
<x-cab2 texto="Clientes recientes" />

<div class="container">
  <div class="row">
    <div class="col-3 my-2">
        <label for="idCodigo">idCodigo</label><br>
        <input  class="form-control" type="text" name="idCodigo" value="{{$incidencia->id}}" readonly>
    </div>
    <div class="col-3 my-2">
        <label for="epigrafe">Epigrafe</label><br>
        <input  class="form-control" type="text" name="epigrafe" value="{{$incidencia->idCodigo}}" readonly>
    </div>
    <div class="col-3 my-2">
        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
        <input class="form-control" type="date" name="fecha" value="{{$incidencia->Fecha}}" readonly>
    </div>
    <div class="col-3 my-2">
        <label for="caracter">Caracter</label><br>
        <input class="form-control" type="text" name="fecha" value="{{$incidencia->Caracter}}" readonly>
    </div>
    <div class="col-12 my-2">
        <label for="Codigo">Codigo</label><br>
        <input class="form-control" widt="100%" type="text" name="Codigo"  value="{{$incidencia->Codigo}}" readonly>
    </div>
    <div class="col-6 my-2">
        <label for="descripcion">Descripción:</label><br>
        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="3"  readonly>{{$incidencia->Descripcion}}</textarea>
        
    </div>
    <div class="col-6 my-2">
        <label for="riesgoa">Riesgo afectado / Conducta delictiva:</label><br>
        <textarea style='resize: none;' name="riesgoa" class="form-control" id="riesgoa" rows="3" readonly>{{$incidencia->Descripcion}}</textarea>
    </div>

    <div class="col-6 my-2">
        <label for="informara">Informar a:</label><br>
        <input class="form-control" type="text" name="informara"  value="{{$incidencia->InformarA}}" readonly >
    </div>
    <div class="col-6 my-2">
        <label for="remitente">Remitente:</label><br>
        <input class="form-control" type="text" name="remitente"  value="{{$incidencia->Remitente}}" readonly >
    </div>
    
    <div class="col-3 my-2">
        <label for="canal">Canal:</label><br>
        <input class="form-control" type="text" name="remitente"  value="{{$incidencia->Canal}}" readonly >
        
    </div>
    <div class="col-3 my-2">
        <label for="fechat">Fecha de tramitación:</label><br>
        <input class="form-control" type="date" name="fechat"  value="{{$incidencia->FechaT}}" readonly >
    </div>
    <div class="col-3 my-2">
        <label for="propuesta">Propuesta:</label><br>
        <input class="form-control" type="text" name="propuesta"  value="{{$incidencia->Propuesta}}" readonly >
    </div>
    <div class="col-3 my-2">
        <label for="nivelrp">Nivel de riesgo penal:</label><br>
        <input class="form-control" type="text" name="nivelrp"  value="{{$incidencia->NivelRP}}" readonly >
    </div>
    <div class="col-6 my-2">
        <label for="comunicara">Comunicar a autoridades:</label><br>
        <textarea style='resize: none;' name="comunicara" class="form-control" id="comunicara" rows="3" readonly>{{$incidencia->ComunicarA}}</textarea>
        
    </div>
    <div class="col-6 my-2">
        <label for="autoria">Autoría:</label><br>
        <textarea style='resize: none;' name="autoria" class="form-control" id="autoria" rows="3" readonly>{{$incidencia->Autoria}}</textarea>
    </div>
    <div class="col-6 my-2">
        <label for="observaciones">Observaciones:</label><br>
        <textarea style='resize: none;' name="observaciones" class="form-control" id="observaciones" rows="3" readonly>{{$incidencia->Observaciones}}</textarea>
        
    </div>
    <div class="col-6 my-2">
        <label for="propuestas">Propuestas:</label><br>
        <textarea style='resize: none;' name="propuestas" class="form-control" id="propuestas" rows="3" readonly>{{$incidencia->Propuestas}}</textarea>
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
    
   





@endsection