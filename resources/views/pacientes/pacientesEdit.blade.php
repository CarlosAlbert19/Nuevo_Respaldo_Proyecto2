<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registros Hospital Amparito</title>
</head>
<body bgcolor="#00D3D6">
    <h1>Edicion de registros de pacientes en el Hospital Amparito</h1><br>
    <form action="/paciente/{{ $paciente->id }}" method="POST">
            @csrf
            @method('patch')
            
            <label for="name"> Nombre del paciente:<br> 
                <input id="name" type="text" name="nombre" value="{{ old('nombre') ?? $paciente->nombre }}"> 
            </label>
            @error('nombre')
                <i> {{ $message}} </i>
            @enderror
            <br>

            <label for="mail"> Correo del paciente:<br>
                <input id="mail" type="email" name="correo" value="{{ old('correo') ?? $paciente->correo }}">
            </label> 
            @error('correo')
                <i> {{ $message}} </i>
            @enderror
            <br>

            <label for="male">Hombre
                <input id="male" type="radio" value="hombre" name="genero">
            </label>

            <label for="female">Mujer
                <input id="female" type="radio" value="mujer" name="genero">
            </label> 
            @error('genero')
                <i> {{ $message}} </i>
            @enderror
            <br>

            <label for="blood">Tipo de sangre:
                <select id="blood" name="sangre">
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

            <label for="comment"> Comentario sobre el paciente:<br>
                <textarea id="comment" type="text box" name="comentario" cols="30" rows="5">{{ old('comentario')}}</textarea>
            </label> 
            @error('comentario')
                <i> {{ $message}} </i>
            @enderror
            <br>

            <label for="access"> ¿Acepta ingresar al paciente al Hospital?
                <input id="access" type="checkbox" name="ingreso"></input>
            </label> 
            @error('ingreso')
                <i> {{ $message}} </i>
            @enderror
            <br> <br>

            <input type="submit" value="Enviar">
        </form>
</body>
</html>