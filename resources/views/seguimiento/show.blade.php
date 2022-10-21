@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Seguimiento" />
<x-cab2 texto="Clientes recientes {{$tabulador['mon']}}" />

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['exp']}}" id="exp-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Expediente</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['act']}}" id="actividad-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Actividad</button>
    </li>
    <li class="nav-item " role="presentation">
        <button class="nav-link {{$tabulador['mon']}}" id="control-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Monitorización</button>
    </li>
    <li class="nav-item " role="presentation">
        <button class="nav-link {{$tabulador['fil']}}" id="ficheros-tab" data-bs-toggle="tab" data-bs-target="#ficheros-tab-pane" type="button" role="tab" aria-controls="ficheros-tab-pane" aria-selected="false">Ficheros</button>
    </li>
</ul>
<div class="px-3">
    <div class="container-fluid">
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="exp-tab" tabindex="0">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="{{$seguimientos->Codigo}}" />
                    <a type="button" href="{{route('seguimiento.index')}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
                    <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
                    <a type="button" href="{{route('seguimiento.index')}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                </div>
                <div class="row">
                    <div class="col-3 my-2">
                        <label for="idCodigo">idCodigo</label><br>
                        <input  class="form-control" type="text" name="idCodigo" value="{{$seguimientos->id}}" readonly>
                    </div>
                    <div class="col-3 my-2">
                        <label for="epigrafe">Epigrafe</label><br>
                        <input  class="form-control" type="text" name="epigrafe" value="{{$seguimientos->Epigrafe}}" readonly>
                    </div>
                    <div class="col-3 my-2">
                        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
                        <input class="form-control" type="date" name="fecha" value="{{$seguimientos->Fecha}}" readonly>
                    </div>
                    <div class="col-3 my-2">
                        <label for="caracter">Caracter</label><br>
                        <input class="form-control" type="text" name="fecha" value="{{$seguimientos->Caracter}}" readonly>
                    </div>
                    <div class="col-12 my-2">
                        <label for="Codigo">Codigo</label><br>
                        <input class="form-control" widt="100%" type="text" name="Codigo"  value="{{$seguimientos->Codigo}}" readonly>
                    </div>
                    <div class="col-6 my-2">
                        <label for="descripcion">Descripción:</label><br>
                        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="3"  readonly>{{$seguimientos->Descripcion}}</textarea>

                    </div>
                    <div class="col-6 my-2">
                        <label for="riesgoa">Riesgo afectado / Conducta delictiva:</label><br>
                        <textarea style='resize: none;' name="riesgoa" class="form-control" id="riesgoa" rows="3" readonly>{{$seguimientos->RiesgoA}}</textarea>
                    </div>

                    <div class="col-6 my-2">
                        <label for="informara">Informar a:</label><br>
                        <input class="form-control" type="text" name="informara"  value="{{$seguimientos->InformarA}}" readonly >
                    </div>
                    <div class="col-6 my-2">
                        <label for="remitente">Remitente:</label><br>
                        <input class="form-control" type="text" name="remitente"  value="{{$seguimientos->Remitente}}" readonly >
                    </div>

                    <div class="col-3 my-2">
                        <label for="canal">Canal:</label><br>
                        <input class="form-control" type="text" name="remitente"  value="{{$seguimientos->Canal}}" readonly >

                    </div>
                    <div class="col-3 my-2">
                        <label for="fechat">Fecha de tramitación:</label><br>
                        <input class="form-control" type="date" name="fechat"  value="{{$seguimientos->FechaT}}" readonly >
                    </div>
                    <div class="col-3 my-2">
                        <label for="propuesta">Propuesta:</label><br>
                        <input class="form-control" type="text" name="propuesta"  value="{{$seguimientos->Propuesta}}" readonly >
                    </div>
                    <div class="col-3 my-2">
                        <label for="nivelrp">Nivel de riesgo penal:</label><br>
                        <input class="form-control" type="text" name="nivelrp"  value="{{$seguimientos->NivelRP}}" readonly >
                    </div>
                    <div class="col-6 my-2">
                        <label for="comunicara">Comunicar a autoridades:</label><br>
                        <textarea style='resize: none;' name="comunicara" class="form-control" id="comunicara" rows="3" readonly>{{$seguimientos->ComunicarA}}</textarea>

                    </div>
                    <div class="col-6 my-2">
                        <label for="autoria">Autoría:</label><br>
                        <textarea style='resize: none;' name="autoria" class="form-control" id="autoria" rows="3" readonly>{{$seguimientos->Autoria}}</textarea>
                    </div>
                    <div class="col-6 my-2">
                        <label for="observaciones">Observaciones:</label><br>
                        <textarea style='resize: none;' name="observaciones" class="form-control" id="observaciones" rows="3" readonly>{{$seguimientos->Observaciones}}</textarea>

                    </div>
                    <div class="col-6 my-2">
                        <label for="propuestas">Propuestas:</label><br>
                        <textarea style='resize: none;' name="propuestas" class="form-control" id="propuestas" rows="3" readonly>{{$seguimientos->Propuestas}}</textarea>
                    </div>
                    <div class="d-flex flex-row-reverse mt-3">
                        <a type="button" href="{{route('seguimiento.destroy', $seguimientos)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
                        <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
                        <a type="button" href="{{route('seguimiento.edit', $seguimientos)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="actividad-tab" tabindex="0">
                <x-cab3 texto="{{$seguimientos->Codigo}}" />
                <x-cab4 texto="Actividades de riesgo" />
                <div class="px-3 mb-5">
                    <div class="container-fluid">
                        <div class="row">
                        @foreach ($actividadesriesgos as $actividadesriesgo)
                            <div class="col-12 mt-3"><strong> - </strong>{{$actividadesriesgo->Nombre}}</div>
                            <div class="col-1">Estado: @if ($actividadesriesgo->Estado == 'checked') <i class=" text-success fa-solid fa-check"></i>@endif </label><br></div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="control-tab" tabindex="0">
                <x-cab3 texto="{{$seguimientos->Codigo}}" />
                <x-cab4 texto="Controles a monitorizar" />
                <div class="px-3 mb-5">
                    <div class="container-fluid">
                        <div class="row">
                        @foreach ($controls as $control)
                            <div class="col-12 mt-3"><strong> - </strong>{{$control->Nombre}}</div>
                            <div class="col-1">Estado: @if ($control->Estado == 'checked') <i class=" text-success fa-solid fa-check"></i>@endif </label><br></div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ficheros-tab-pane" role="tabpanel" aria-labelledby="ficheros-tab" tabindex="0">
                <x-cab3 texto="{{$seguimientos->Codigo}}" />
                <x-cab4 texto="Ficheros" />
                <div class="p-1">
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
                                <input type="hidden" name="id" value="{{$seguimientos->id}}">
                                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                            </div>
                        </form>
                        @endforeach
                            <h5 class="mt-5">Añadir fichero</h5>
                            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{route('incidencias.fileform')}}">
                                <div class="container">
                                    <div class="row">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$seguimientos->id}}">
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

            </div>
        </div>
    </div>
</div>
<div class="container pb-5"></div>
@endsection

