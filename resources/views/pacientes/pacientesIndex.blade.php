<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Hospital Amparito</title>
</head>
<body>
    <h1>Listado de pacientes</h1> 

    <a href="/paciente/create">Registrar un nuevo paciente al Hospital Amparito</a><br><br>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Genero</th>
            <th>Sangre</th>
            <th>Comentario</th>
            <th>Ingreso</th>
        </tr>
        @foreach ($pacientes as $paciente)
            <tr>
                <td> {{ $paciente->nombre }}</td>
                <td> {{ $paciente->correo }}</td>
                <td> {{ $paciente->genero }}</td>
                <td> {{ $paciente->sangre }}</td>
                <td> {{ $paciente->comentario }}</td>
                <td> {{ $paciente->ingreso }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>