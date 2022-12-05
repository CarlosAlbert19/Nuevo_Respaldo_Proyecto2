<x-plantilla titulo="Detalles del paciente">
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    <!--<h1>Detalles del paciente</h1>-->

    <!--<a href="/paciente">Regresar a la lista de pacientes</a><br><br>-->

    <div class="card-panel teal green lighten-4"><h5 class="center-align"><a href="/paciente">Regresar</a></h5></div>
    <div class="card-panel teal green lighten-4"><h5 class="center-align"><a href="/paciente/create">Ingresar paciente al hospital</a></h5></div>

    <div class="card-panel teal green accent-2"><h2>Paciente: {{ $paciente->nombre }}</h2></div>

    <!--<h2>Paciente: {{ $paciente->nombre }}</h2>-->

    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

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
            <th>Medicamentos</th>
            <th>Historial clinico</th>
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
            <td>
                <ul>
                    @foreach ($paciente->archivos as $archivo)
                        <li><a href="{{route('descarga', $archivo)}}">{{$archivo->nombre_original}}</a></li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>
</x-plantilla>