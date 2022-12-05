<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Hospital Amparito</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pogo-slider.min.css">
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
                    <a class="new-btn-d br-2" href="/"><span>Regresar</span></a>
						<a class="new-btn-d br-2" href="/paciente/create"><span>Ingresar paciente al hospital</span></a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Bienvenido a los registros de pacientes del Hospital Amparito</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand"><img src="images/hospital-logo.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="/#home">Inicio</a></li>
                        <li><a class="nav-link" href="/#about">Acerca</a></li>
                        <li><a class="nav-link" href="/#services">Servicios</a></li>
                        <li><a class="nav-link" href="/#gallery">Galeria</a></li>
						<li><a class="nav-link" href="/#team">Doctores</a></li>
                        <li><a class="nav-link" href="/#blog">Blog</a></li>
						<li><a class="nav-link" href="/#contact">Contacto</a></li>
                        <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <!--<a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>-->
									<a href="{{ route('logout') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log out</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
</body>

<x-plantilla titulo="Listado de pacientes">
    <!--<h1>Listado de pacientes</h1>--> 

    <!--<a href="/">Regresar a la página principal del Hospital Amparito</a><br><br>
    
    <a href="/paciente/create">Registrar un nuevo paciente al Hospital Amparito</a><br><br>-->

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

</html>