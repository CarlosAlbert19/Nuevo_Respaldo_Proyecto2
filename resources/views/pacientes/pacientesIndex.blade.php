<x-plantilla titulo="Listado de pacientes">
    <!--<h1>Listado de pacientes</h1>--> 

    <a href="/">Regresar a la página principal del Hospital Amparito</a><br><br>
    
    <a href="/paciente/create">Registrar un nuevo paciente al Hospital Amparito</a><br><br>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Genero</th>
            <th>Sangre</th>
            <th>Comentario</th>
            <th>Ingreso</th>
            <th>Edicion</th>
            <th>Eliminacion</th>
            <th>Acciones</th>
        </tr>
        @foreach ($pacientes as $paciente)
            <tr>
            <td> {{ $paciente->id }}</td>
            <td> {{ $paciente->user->name }}</td>
                <td> 
                    <a href="/paciente/{{ $paciente->id }}">
                        {{ $paciente->nombre }}
                    </a>
                </td>
                <td> {{ $paciente->correo }}</td>
                <td> {{ $paciente->genero }}</td>
                <td> {{ $paciente->sangre }}</td>
                <td> {{ $paciente->comentario }}</td>
                <td> {{ $paciente->ingreso }}</td>
                <td><a href="/paciente/{{$paciente->id}}/edit">Editar</a></td>
                <td>
                    <form action="/paciente/{{$paciente->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
                <td>
                    <a href="{{route('paciente/correo', $paciente)}}">Enviar correo de factura</a>
                </td>
            </tr>
        @endforeach
    </table>
</x-plantilla>