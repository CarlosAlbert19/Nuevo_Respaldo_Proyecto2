<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Hospital Amparito</title>
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body bgcolor="#FFD180">
    <div class="card-panel teal lighten-1"><h1 class="center-align">Registro de pacientes en el Hospital Amparito</h1></div>
    <div class="card-panel teal lighten-2"><h3>Usuario: {{\Auth::user()->name}}</h3></div>
    <!-- <h1>Registro de pacientes en el Hospital Amparito</h1><br> -->
    <!-- <h3>Usuario: {{\Auth::user()->name}}</h3><br> -->
    <form action="/paciente" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-field col s12">
                <input class="validate" id="name" type="text" name="nombre" value="{{ old('nombre')}}"> 
                <label for="name"> Nombre del paciente:</label>
                @error('nombre')
                    <i> {{ $message}} </i>
                @enderror
            </div>
            <br> 

            <div class="input-field col s12">
                <input class="validate" id="mail" type="email" name="correo" value="{{ old('correo')}}">
                <label for="mail"> Correo del paciente:</label> 
                @error('correo')
                    <i> {{ $message}} </i>
                @enderror
            </div>
            <br>

            <p>
                <label for="male">
                    <input id="male" type="radio" value="hombre" name="genero">
                    <span>Hombre</span>
                </label>
            </p>
            <p>
                <label for="female">
                    <input id="female" type="radio" value="mujer" name="genero">
                    <span>Mujer</span>
                </label> 
            </p>
            @error('genero')
                <i> {{ $message}} </i>
            @enderror
            <br>

            <label for="blood">Tipo de sangre:
                <select class="col s12" id="blood" name="sangre">
                    <option value="A+">A positivo</option>
                    <option value="A-">A negativo</option>
                    <option value="AB+">AB positivo</option>
                    <option value="AB-">AB negativo</option>
                    <option value="B+">B positivo</option>
                    <option value="B-">B negativo</option>
                    <option value="O+">O positivo</option>
                    <option value="O-">O negativo</option>
                </select>
            </label> 
            @error('sangre')
                <i> {{ $message}} </i>
            @enderror
            <br> 

            <div class="input-field col s12">
                <textarea class="materialize-textarea" id="comment" type="text box" name="comentario" cols="30" rows="5">{{ old('comentario')}}</textarea>
                <label for="comment"> Comentario sobre el paciente:</label>
            </div> 
            @error('comentario')
                <i> {{ $message}} </i>
            @enderror
            <br>

            <p>
                <label for="access"> 
                    <input id="access" type="checkbox" class="filled-in" name="ingreso"></input>
                    <span>¿Acepta ingresar al paciente al Hospital?</span>
                </label> 
            </p>
            @error('ingreso')
                <i> {{ $message}} </i>
            @enderror
            <br> 
            
            <label for="user_id"> Doctor
                <select class="col s12" name="user_id" id="user_id">
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </label>
            @error('user_id')
                <i> {{ $message}} </i>
            @enderror
            <br> 

            <label for="medicamentos_id"> Medicamento(s) <br>
                <select class="col s12" name="medicamentos_id[]" multiple id="medicamentos_id">
                    @foreach ($medicamentos as $medicamento)
                        <option value="{{$medicamento->id}}">{{ $medicamento->nombre }}</option>
                    @endforeach
                </select>
            </label>
            <br>
            
            <label for="archivo"> Historial clinico: <br>
                <input type="file" name="archivo">
            </label>
            <br><br>

            <input type="submit" value="Enviar">
        </form>
</body>
</html>