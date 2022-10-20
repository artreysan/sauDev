<!DOCTYPE html>
<html lang="{{ str_replace ('_','-', app()->getLocale())}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
        
    <link href="https://framework-gb.cdn.gob.mx/assets/styles/main.css" type="text/css" rel="stylesheet">
    <link href="{{asset('css/semaforo.css')}}" rel="stylesheet">
    <!-- CSS only -->

</head>

<body>
    <header>
    
    </header>

        <div class="container top-buffer bottom-buffer vertical-buffer center">
            @yield('contenido')
        </div>
    <div class="container">
        <h5><span class="icon-infocircle" aria-hidden="true"></span> NOTA IMPORTANTE: </h5>
        <p>El solicitante deberá ser el director o subdirector del área donde estará ubicado el usuario.</p>
        <br>
    </div>

    <!--Scrip del para el frame del GOB-->
    <script src="https://framework-gb.cdn.gob.mx/gobmx.js"></script>
</body>
</html>

