<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf Miembro</title>
</head>
<body>
    <h4>Informe Anual 2023 Iglesia Evangelica Bethel</h4>
    <table class="table table-sm table-bordered">
        <thead>
            <th> I. Datos informativos de la iglesia</th>
        </thead>
        <tbody>
            <br>
            <tr>
                <th>Nombre de la iglesia:</th>
                    <td >Bethel</td>
            </tr>
            <tr>
                <th>Categoria de la iglesia:</th>
                    <td>Organizada</td>
            </tr>
            <tr>
                <th>Direccion de la iglesia:</th>
                    <td>C/. Carlos loayza</td>
            </tr>
            <tr>
                <th>Numero de Afiliacion:</th>
                    <td>34-45</td>
            </tr>
            <tr>
                <th >Telefono:</th> 
                    <td>46 357357</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="table table-sm table-bordered">
        <thead>
            <th> II. Datos Informativos del Pastor</th>
        </thead>
        <tbody>
            <br>
            <tr>
                <th>Nombre Completo:</th>
                    <td >Julio cesar Barbeito C.</td>
            </tr>
            <tr>
                <th>Dirección o Domicilio:</th>
                    <td>Urb. Magadalena</td>
            </tr>
            <tr>
                <th>Celula de Identidad:</th>
                    <td>68543325 BN</td>
            </tr>
            <tr>
                <th>Grado Ministerial:</th>
                    <td>Ordenado</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class="tablee ">
        <thead>
            <th> III. Informe de los miembros</th>
        </thead>
        <tbody>
            <br>
            <tr>
                <th></th>
                <th colspan="2"> varones</th>
                <th>Mujeres</th>
                <th>total</th>
                <th>Observaciones</th>
            </tr>
            <tr>
                <th>adultos</th>
                    {{-- <td colspan="2">{{$pdmiembro[1]->cantidad }}</td><!--aqui es varones--> --
                    <td>{{$pdmiembro[0]->cantidad }}</td><!--aqui es mujeres--> --}}
                    <td>{{$mcontador}}</td>
                    {{-- <td>{{$pdmiembro[1]->cantidad }}</td> 
                    
            </tr>
            <tr>
                <th>Jovenes</th>
                    <td colspan="2">5</td>
                    <td>5</td>
                    <td>10</td>
                    {{-- <td>{{$pdmiembro[0]->cantidad }}</td> --}}
            </tr>
            <tr>
                <th>Adolecentes</th>
                    <td colspan="2">5</td>
                    <td>1</td>
                    <td>6</td>
                    {{-- <td>{{$pdmiembro[0]->cantidad }}</td> --}}
            </tr>
            <tr>
                <th>Niños</th>
                    <td colspan="2">8</td>
                    <td>7</td>
                    <td>15</td>
                    {{-- <td>{{$pdmiembro[0]->cantidad }}</td> --}}
            </tr>
            <tr>
                <th>TOTALES</th>
                    <td colspan="2">25</td>
                    <td>20</td>
                    <td>45</td>
                    {{-- <td>{{$pdmiembro[0]->cantidad }}</td> --}}
            </tr>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <h5>Trinidad 12 de enero de 2023</h5>
    <style>
        /* table, th, td {
            border: 1px solid black;
        } */
    </style>
</body>
</html>