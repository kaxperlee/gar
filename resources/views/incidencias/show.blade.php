@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Incidencias" />
<x-cab2 texto="Incidencia: {{$incidencia->Delito->Epigrafe}} / {{$incidencia->Descripcion}}" />

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['inc']}}" id="incidencia-tab" data-bs-toggle="tab" data-bs-target="#incidencia-tab-pane" type="button" role="tab" aria-controls="incidencia-tab-pane" aria-selected="true">Datos</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['fic']}}" id="ficheros-tab" data-bs-toggle="tab" data-bs-target="#ficheros-tab-pane" type="button" role="tab" aria-controls="ficheros-tab-pane" aria-selected="false">Ficheros</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['inf']}}" id="informes-tab" data-bs-toggle="tab" data-bs-target="#informes-tab-pane" type="button" role="tab" aria-controls="informes-tab-pane" aria-selected="false">Informes</button>
    </li>
    <li class="nav-item ms-auto" role="presentation">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" >
            <label class="form-check-label" for="flexSwitchCheckDefault" >Activo</label>
          </div>
    </li>
</ul>
<div class="px-0">
    <div class="container-fluid">
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade {{$tabulador['inc']}}" id="incidencia-tab-pane" role="tabpanel" aria-labelledby="incidencia-tab" tabindex="0">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Datos" />
                    <a type="button" href="{{route('incidencias.delete',$incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
                    <a type="button" href="{{route('incidencias.edit', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                </div>
                <div class="row px-3">
                    <div class="col-2 my-2">
                        <label for="epigrafe">Epigrafe: </label><br>
                        <input  class="form-control" type="text" name="epigrafe" value="{{$incidencia->Delito->Epigrafe}}" readonly>
                    </div>
                    <div class="col-10 my-2">
                        <label for="Codigo">Delito: </label><br>
                        <input class="form-control" widt="100%" type="text" name="Codigo"  value="{{$incidencia->Delito->Delito}}" readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
                        <input class="form-control" type="date" name="fecha" value="{{$incidencia->Fecha}}" readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="caracter">Caracter</label><br>
                        <input class="form-control" type="text" name="fecha" value="{{$incidencia->Caracter->Nombre}}" readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="canal">Canal:</label><br>
                        <input class="form-control" type="text" name="remitente"  value="{{$incidencia->Canal->Nombre}}" readonly >
                    </div>
                    <div class="col-6 my-2">
                        <label for="descripcion">Descripción:</label><br>
                        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="3"  readonly>{{$incidencia->Descripcion}}</textarea>

                    </div>
                    <div class="col-6 my-2">
                        <label for="riesgoa">Riesgo afectado / Conducta delictiva:</label><br>
                        <textarea style='resize: none;' name="riesgoa" class="form-control" id="riesgoa" rows="3" readonly>{{$incidencia->RiesgoA}}</textarea>
                    </div>

                    <div class="col-6 my-2">
                        <label for="informara">Informar a:</label><br>
                        <input class="form-control" type="text" name="informara"  value="{{$incidencia->InformarA}}" readonly >
                    </div>
                    <div class="col-6 my-2">
                        <label for="remitente">Remitente:</label><br>
                        <input class="form-control" type="text" name="remitente"  value="{{$incidencia->Remitente}}" readonly >
                    </div>


                    <div class="col-4 my-2">
                        <label for="fechat">Fecha de tramitación:</label><br>
                        <input class="form-control" type="date" name="fechat"  value="{{$incidencia->FechaT}}" readonly >
                    </div>
                    <div class="col-4 my-2">
                        <label for="propuesta">Propuesta:</label><br>
                        <input class="form-control" type="text" name="propuesta"  value="{{$incidencia->Propuesta}}" readonly >
                    </div>
                    <div class="col-4 my-2">
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
                    <div class="d-flex flex-row-reverse mt-3">
                        <a type="button" href="{{route('incidencias.destroy', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
                        <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
                        <a type="button" href="{{route('incidencias.edit', $incidencia)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$tabulador['fic']}}" id="ficheros-tab-pane" role="tabpanel" aria-labelledby="ficheros-tab" tabindex="1">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Ficheros" />
                    <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{route('files.fileform')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$incidencia->id}}">
                        <input type="hidden" name="fileable_type" value="App\Models\Incidencia">
                        <input type="hidden" name="link" value="incidencias">
                        <div class="d-flex  me-2">
                            <input class="form-control btn-sm me-2" type="text" name="Descripcion" id="Descripcion" placeholder="Descripcion breve del fichero">
                            <input class="form-control btn-sm me-2" type="file" name="file" id="file" placeholder="Selecciona un fichero">
                            <input type="submit" name="mysubmit" value="Añadir fichero"  class="btn btn-primary btn-sm" />
                        </div>
                    </form>
                </div>
                <div class="row px-3">
                    <table class='table table-hover'>
                        <tr>
                            <th>Fichero</th>
                            <th>Descripción</th>
                            <th width="10"></th>
                            <th width="10"></th>
                        </tr>
                        @foreach ($incidencia->files as $file)
                        <tr>
                            <td><a href="{{route('files.download',['id' => $file->id])}}">{{$file->Nombre}}</a></td>
                            <td>{{$file->Descripcion}}</td>
                            <td><a href="{{route('files.download',['id' => $file->id])}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-file-arrow-down"></i></a></td>
                            <td><a href="{{route('control.delete', $file->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <div class="tab-pane fade {{$tabulador['inf']}}" id="informes-tab-pane" role="tabpanel" aria-labelledby="informes-tab" tabindex="1">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Informes" />
                </div>
                <div class="px-3 mb-5">
                    <div class="container-fluid">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="p-1" style='display:none'>
    <div class="col-12 my-4">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h5 class="mb-3"><strong>Informes</strong></h5>
            @foreach ($informes as $informe)
            <form method="POST" action="{{route('files.destroy',$informe)}}">
                <div class="input-group mb-3">
                    <a href="{{route('files.download',['id' => $informe->id])}}" class="btn btn-primary">Ver {{$informe->id}}</a>
                    <input type="text" class="form-control" value="{{$informe->Obs}}" readonly aria-describedby="button-addon2">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$informe->id}}">
                    <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                </div>
            </form>
            @endforeach
            <h5 class="mt-5">Añadir informe</h5>
            <form method="POST" action="{{route('incidencias.store')}}">
                @csrf
                <input type="hidden" name="id_incidencia" value="{{$incidencia->id}}">
                <div class="container-fluid">
                    <div class="row">
                        <div class="input-group col-6 mb-3">
                            <span class="input-group-text" id="Obs">Crear informe: </span>
                            <input type="text" name="Obs" class="form-control" id="Obs" aria-describedby="Obs">
                            <button type="submit"  class="btn btn-primary me-2"><i class="fa-solid fa-plus"></i> Aceptar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="p-1 " style='display:none'>
    <div class="col-12 my-4">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h5 class=""><strong>Ficheros</strong></h5>
            <table class='table table-light'>
                <tr>
                    <th>Fichero</th>
                    <th>Descripción</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($incidencia->files as $file)
                <tr>
                    <td>{{$file->Nombre}}</td>
                    <td>{{$file->Descripcion}}</td>
                    <td><i class="fa-solid fa-trash"></i></td>
                    <td><i class="fa-solid fa-file-arrow-down"></i></td>
                </tr>
                @endforeach
            </table>

            <div >
                @foreach ($incidencia->files as $file)
                <form method="POST" action="{{route('files.destroy',$file)}}">
                    <div class="input-group mb-3">
                        <a href="{{route('files.download',['id' => $file->id])}}" class="btn btn-primary">Ver {{$file->id}}</a>
                        <input type="text" class="form-control" value="{{$file->Descripcion}}" readonly aria-describedby="button-addon2">
                        <input type="text" class="form-control" value="{{$file->Nombre}}" readonly aria-describedby="button-addon2">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$file->id}}">
                        <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container" style='margin-bottom:80px'></div>
@endsection


