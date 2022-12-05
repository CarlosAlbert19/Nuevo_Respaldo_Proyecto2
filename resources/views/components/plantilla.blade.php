<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantilla</title>
    
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])    
</head>
<body>
<div class="card-panel teal lighten-2"><h1 class="center-align">{{ $titulo }}</h1></div>
    {{ $slot }}
</body>
</html>