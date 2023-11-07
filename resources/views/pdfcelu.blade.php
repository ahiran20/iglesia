<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
        
    <br>
    <table class="table">
        <thead>
            <th> I. Informe de las personas que han ido a la escuela de lideres</th>
        </thead>
        <tbody>
            <br>
            <tr>
                <th></th>
                <th colspan=""> varones</th>
                <th>Mujeres</th>
                <th>total</th>
                <th>Observaciones</th>
            </tr>
            <tr>
                <th>adultos</th>
                    <td colspan="1">7</td>
                    <td>7</td>
                    <td>14</td>
                    {{-- <td>{{$pdmiembro[1]->cantidad }}</td> --}}
            </tr>
            <tr>
                <th>Jovenes</th>
                    <td colspan="1">5</td>
                    <td>5</td>
                    <td>10</td>
                    {{-- <td>{{$pdmiembro[0]->cantidad }}</td> --}}
            </tr>
           
            <tr>
                <th>TOTALES</th>
                    <td colspan="1">25</td>
                    <td>20</td>
                    <td>45</td>
                    {{-- <td>{{$pdmiembro[0]->cantidad }}</td> --}}
            </tr>
        </tbody>
    </table>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</body>
</html>
