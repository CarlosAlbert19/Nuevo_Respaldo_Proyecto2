<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente especifico</title>
</head>
<body>
    <h1>Detalles del paciente</h1>

    <a href="/paciente">Regresar a la lista de pacientes</a><br><br>

    <h2>Paciente: {{ $paciente->nombre }}</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Genero</th>
            <th>Sangre</th>
            <th>Comentario</th>
            <th>Ingreso</th>
        </tr>
        <tr>
            <td> {{ $paciente->id }}</td>
            <td> {{ $paciente->nombre }} </td>
            <td> {{ $paciente->correo }}</td>
            <td> {{ $paciente->genero }}</td>
            <td> {{ $paciente->sangre }}</td>
            <td> {{ $paciente->comentario }}</td>
            <td> {{ $paciente->ingreso }}</td>
        </tr>
    </table>
</body>
</html>