<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link REL="stylesheet" href="{{asset('css/reboot.css')}}">
    <link REL="stylesheet" href="{{asset('css/pdf.css')}}">
</head>
<body>
    <div class="container-fluid px-0">
        <table class="HeadTable">
            <tr vertical-align="top">
                <td  class='HeadLogo'><img src="{{asset('images/logo.png')}}"  width="250" alt="Grupo Asesor Ros"></td>
                <td  class='HeadTitulo'><h2>Informe</h2><br></td>
            </tr>
        </table>
    </div>
</body>
    <h1>Informe PDF</h1>
    <h3>{{$informe}}</h3>
    <h3>{{$informes}}</h3>
</body>
</html>








