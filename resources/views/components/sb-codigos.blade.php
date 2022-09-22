<div>
   <x-cab1 texto="Ident. Riesgo" />
   <x-cab1 texto="Riesgos" />
  
   <ul>
    @foreach ($codigos as $codigo)
     
            <li style='list-style-type: none; margin-left:-30px; padding-bottom:4px;'>
                <a style="text-decoration-line: none"  href="#">{{$codigo->idCodigo }}. {{ $codigo->idCodigo2 }}</a>
            </li>
    @endforeach
    </ul>
</div>