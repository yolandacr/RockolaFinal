<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="description" content="Juego divertido de adivinar canciones. Registro">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Partida Fácil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{asset('css/registro.css')}}" rel="stylesheet" />
<link href="{{asset('css/facil.css')}}" rel="stylesheet" />
</head>
<body onload="imprimeUsuario()">
<div class="container-fluid">


    {{-- HEADER --}}  
    <header style="margin-top:3%;">
    <div class="row text-center">
    <div class="col">JUGADOR: <span id="campoJugador"></span>
    </div>
    <div class="col">
    <audio controls>
    <source src="{{ $cancionActual -> ruta }}" type="audio/wav">
    Tu navegador no es compatible con el audio de la web
    </audio>
    </div> 
    <div class="col">PUNTOS: <span id="campoPuntos"></span>
    </div>
    </div>
    </header>


    {{-- SECCION PRINCIPAL --}}
    
    <main style="margin-top:15%;">
    <div class="row mx-auto" id="columna1">
    <div class="col-sm-6 text-center">

    <form action="facil" method="get">
    <input type="hidden" value="{{$opciones[0] -> nombre}}" id="{{$opciones[0] -> nombre}}" name="titulo">
    <button type="button" class="btn btn-outline-danger">{{$opciones[0] -> nombre}}</button>
    </form>

    <form action="facil" method="get" style="margin-top:5%;">
    <input type="hidden" value="{{$opciones[1] -> nombre}}" id="{{$opciones[1] -> nombre}}" name="titulo">
    <button type="button" class="btn btn-outline-danger derecha">{{$opciones[1] -> nombre}}</button>
    </form>
    </div> 

    <div class="col-sm-6 text-center">
    <form action="facil" method="get">
    <input type="hidden" value="{{$opciones[2] -> nombre}}" id="{{$opciones[2] -> nombre}}" name="titulo">
    <button type="button" class="btn btn-outline-danger">{{$opciones[2] -> nombre}}</button>
    </form>

    <form action="facil" method="get" style="margin-top:5%;">
    <input type="hidden" value="{{$opciones[3] -> nombre}}" id="{{$opciones[3] -> nombre}}" name="titulo">
    <button type="button" class="btn btn-outline-danger derecha">{{$opciones[3] -> nombre}}</button>
    </form>
    </div>  

    </main>
    </div>




{{-- FOOTER --}}
<div class="row text-center mx-auto" id="filaFooter" style="margin-top:12%;">
<div class="col-sm-12">
<footer>
<p><a href="{{route('home')}}">ATRÁS</a></p>
</footer>
</div>
</div>

{{-- PARTE SCRIPTS --}}
<script src="js/juego.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</div>
</body>
</html>