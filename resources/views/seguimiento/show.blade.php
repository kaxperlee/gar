@extends('layouts.main')

@section('sidebar')

    <x-sb-codigos />

@endsection

@section('main')

<x-cab1 texto="Seguimiento" />
<x-cab2 texto="{{$seguimiento->Delito->Epigrafe}}/{{$seguimiento->Delito->Delito}}" />

<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['exp']}}" id="exp-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Delito</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link {{$tabulador['act']}}" id="actividad-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Actividades de riesgo</button>
    </li>
    <li class="nav-item " role="presentation">
        <button class="nav-link {{$tabulador['acl']}}" id="actual-tab" data-bs-toggle="tab" data-bs-target="#actual-tab-pane" type="button" role="tab" aria-controls="actual-tab-pane" aria-selected="false">Controles actuales</button>
    </li>
    <li class="nav-item " role="presentation">
        <button class="nav-link {{$tabulador['mon']}}" id="control-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Controles propuestos</button>
    </li>
    <li class="nav-item " role="presentation">
        <button class="nav-link {{$tabulador['fil']}}" id="ficheros-tab" data-bs-toggle="tab" data-bs-target="#ficheros-tab-pane" type="button" role="tab" aria-controls="ficheros-tab-pane" aria-selected="false">Ficheros</button>
    </li>
</ul>
<div class="px-3">
    <div class="container-fluid">
        <div class="tab-content mt-3" id="myTabContent">
            <div class="tab-pane fade {{$tabulador['exp']}}" id="home-tab-pane" role="tabpanel" aria-labelledby="exp-tab" tabindex="0">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Delito" />
                    <a type="button" href="{{route('seguimiento.delete',$seguimiento)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
                    <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
                    <a type="button" href="{{route('seguimiento.index')}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                </div>
                <div class="row">
                    <div class="col-4 my-2">
                        <label for="idCodigo">id: </label><br>
                        <input  class="form-control" type="text" name="idCodigo" value="{{$seguimiento->id}}" readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="epigrafe">Epigrafe</label><br>
                        <input  class="form-control" type="text" name="epigrafe" value="{{$seguimiento->Delito->Epigrafe}}" readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="Codigo">Codigo</label><br>
                        <input class="form-control" widt="100%" type="text" name="Codigo"  value={{$seguimiento->Delito->Codigo}} readonly>
                    </div>
                    <div class="col-12 my-2">
                        <label for="caracter">Delito</label><br>
                        <input class="form-control" type="text" name="fecha" value="{{$seguimiento->Delito->Delito}}" readonly>
                    </div>
                    <div class="col-12 my-2">
                        <label for="descripcion">Descripción:</label><br>
                        <textarea style='resize: none;' name="descripcion" class="form-control" id="descripcion" rows="2"  readonly>{{$seguimiento->Delito->Descripcion}}</textarea>
                    </div>
                    <div class="col-4 my-2">
                        <label for="fecha">Fecha (dd/mm/aaaa)</label><br>
                        <input class="form-control" type="date" name="fecha" value="{{$seguimiento->Fecha}}" readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="manejo_id">Manejo riesgo:</label><br>
                        <input name="manejo_id" type="text" value="{{$seguimiento->Manejo->Nombre}}" class="form-control" id="manejo_id"  readonly>
                    </div>
                    <div class="col-4 my-2">
                        <label for="calificacion_id">Calificación nivel riesgo:</label><br>
                        <input class="form-control" type="text" name="calificacion_id" id="calificacion_id" value="{{$seguimiento->Calificacion->Nombre}}" readonly >
                    </div>
                    <div class="col-12 my-2">
                        <label for="Observaciones">Descripción:</label><br>
                        <textarea style='resize: none;' name="Observaciones" class="form-control" id="Observaciones" rows="2"  readonly>{{$seguimiento->Observaciones}}</textarea>
                    </div>
                    <div class="d-flex flex-row-reverse mt-3">
                        <a type="button" href="{{route('seguimiento.destroy', $seguimiento)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Delete</a>
                        <a type="button" href="#" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-box-archive"></i> Archivar</a>
                        <a type="button" href="{{route('seguimiento.edit', $seguimiento)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade {{$tabulador['act']}}" id="profile-tab-pane" role="tabpanel" aria-labelledby="actividad-tab" tabindex="0">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Actividades de riesgo" />
                    <a type="button" href="{{route('riesgo.create',$seguimiento)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Nueva actividad de riesgo</a>
                </div>
                <div class="px-3 mb-5">
                    <div class="container-fluid">
                        <table class='table table-hover'>
                            <tr>
                                <th width="5">id: </th>
                                <th>Riesgo</th>
                                <th colspan="2"></th>
                            </tr>
                        @foreach ($seguimiento->riesgos as $riesgo)
                            <tr>
                                <td>{{$riesgo->id}}</td>
                                <td><a href="{{route('riesgo.show',$riesgo)}}">{{$riesgo->Nombre}}</a></td>
                                <td><a href="{{route('riesgo.edit', $riesgo->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="{{route('riesgo.delete', $riesgo->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$tabulador['acl']}}" id="actual-tab-pane" role="tabpanel" aria-labelledby="control-tab" tabindex="0">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Controles actuales" />
                    <a type="button" href="{{route('actual.create',$seguimiento)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Nuevo control actual</a>

                </div>
                <div class="px-3 mb-5">
                    <div class="container-fluid">

                        <table class='table table-hover'>
                            <tr>
                                <th width="5">id: </th>
                                <th>Control</th>
                                <th>Responsable</th>
                                <th width="5">Preventivo</th>
                                <th width="5">Normativo</th>
                                <th width="5">Correctivo</th>
                                <th colspan="2"></th>
                            </tr>
                        @foreach ($seguimiento->actuals as $actual)
                            <tr>
                                <td>{{$actual->id}}</td>
                                <td><a href="{{route('actual.show',$actual)}}">{{$actual->Nombre}}</a></td>
                                <td>{{$actual->Responsable}}</td>
                                <td>{{$actual->Preventivo}}</td>
                                <td>{{$actual->Normativo}}</td>
                                <td>{{$actual->Detectivo}}</td>
                                <td><a href="{{route('actual.edit', $actual->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="{{route('actual.delete', $actual->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$tabulador['mon']}}" id="contact-tab-pane" role="tabpanel" aria-labelledby="control-tab" tabindex="0">
                <div class="d-flex mb-3" style='width:100%;background-color:white'>
                    <x-cab3 texto="Políticas de actuación" />
                    <a type="button" href="{{route('control.create',$seguimiento)}}" class="btn btn-primary btn-sm me-2"><i class="fa-solid fa-trash"></i> Nuevo control actual</a>
                </div>
                <div class="px-3 mb-5">
                    <div class="container-fluid">
                        <table class='table table-hover'>
                            <tr>
                                <th width="5">id: </th>
                                <th>Control</th>
                                <th>Responsable</th>
                                <th width="5">Preventivo</th>
                                <th width="5">Normativo</th>
                                <th width="5">Correctivo</th>
                                <th colspan="2"></th>
                            </tr>
                        @foreach ($seguimiento->controls as $control)
                            <tr>
                                <td>{{$control->id}}</td>
                                <td><a href="{{route('control.show',$control)}}">{{$control->Nombre}}</a></td></td>
                                <td>{{$control->Responsable}}</td>
                                <td>{{$control->Preventivo}}</td>
                                <td>{{$control->Normativo}}</td>
                                <td>{{$control->Detectivo}}</td>
                                <td><a href="{{route('control.edit', $control->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="{{route('control.delete', $actual->id)}}" class="color-prymary" role="button" aria-disabled="true"><i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade {{$tabulador['fil']}}" id="ficheros-tab-pane" role="tabpanel" aria-labelledby="ficheros-tab" tabindex="0">
                <x-cab3 texto="{{$seguimiento->Codigo}}" />
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
                                <input type="hidden" name="id" value="{{$seguimiento->id}}">
                                <button class="btn btn-danger" type="submit"><i class="fa-solid fa-circle-xmark"></i></button>
                            </div>
                        </form>
                        @endforeach
                            <h5 class="mt-5">Añadir fichero</h5>
                            <form method="POST" enctype="multipart/form-data" id="upload-file" action="{{route('incidencias.fileform')}}">
                                <div class="container">
                                    <div class="row">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$seguimiento->id}}">
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

