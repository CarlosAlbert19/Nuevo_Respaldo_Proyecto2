<x-plantilla titulo="Detalles del paciente">
    <!--<h1>Detalles del paciente</h1>-->

    <a href="/paciente">Regresar a la lista de pacientes</a><br><br>

    <h2>Paciente: {{ $paciente->nombre }}</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Genero</th>
            <th>Sangre</th>
            <th>Comentario</th>
            <th>Ingreso</th>
            <th>Medicamentos</th>
        </tr>
        <tr>
            <td> {{ $paciente->id }}</td>
            <td> {{ $paciente->user->name }}</td>
            <td> {{ $paciente->nombre }} </td>
            <td> {{ $paciente->correo }}</td>
            <td> {{ $paciente->genero }}</td>
            <td> {{ $paciente->sangre }}</td>
            <td> {{ $paciente->comentario }}</td>
            <td> {{ $paciente->ingreso }}</td>
            <td>
                <ol>
                    @foreach ($paciente->medicamentos as $medicamento)
                        <li>{{$medicamento->nombre}} ({{$medicamento->tipo}})</li>
                    @endforeach
                </ol>
            </td>
        </tr>
    </table>
</x-plantilla>