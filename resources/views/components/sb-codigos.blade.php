<div>
    <div class="mb-4">
        <x-cab1 texto="Ident. Riesgo" />
        <form action="">
            <div class="form-group mb-3">
                <label for="">
                    <span><strong>Código riesgo:</strong> </br></span> 
                    <input class="form-control mt-2" type="text" name="riesgo">
                </label>
            </div>
            <input type="submit" name="mysubmit" value="Buscar"  class="btn btn-primary btn-sm" />
            <input type="reset" name="mysubmit" value="Reset"  class="btn btn-primary btn-sm" />
        </form>
    </div>
    <x-cab1 texto="Riesgos" />
    <ul>
    @foreach ($codigos as $codigo)
    <li style='list-style-type: none; margin-left:-30px; padding-bottom:4px;'>
        <a style="text-decoration-line: none"  href="#">{{$codigo->idCodigo }}. {{ $codigo->idCodigo2 }}</a>
    </li>
    @endforeach
    </ul>
</div>