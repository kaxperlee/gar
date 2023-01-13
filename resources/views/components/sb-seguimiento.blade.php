<div>
    <div class="mb-4">
        <x-cab1 texto="Nuevo seguimiento" />
        <form action="{{route('seguimiento.search')}}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="">
                    <span><strong>Código delito:</strong> </br></span>
                    <input class="form-control mt-2" type="text" name="riesgo">
                </label>
            </div>
            <input type="submit" name="mysubmit" value="Buscar"  class="btn btn-primary btn-sm" />
            <input type="reset" name="mysubmit" value="Reset"  class="btn btn-primary btn-sm" />
        </form>
    </div>
</div>
