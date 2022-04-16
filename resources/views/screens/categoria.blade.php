<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta name="description" content="Juego divertido de adivinar canciones. Registro">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Modo de Juego</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="{{asset('css/opciones.css')}}" rel="stylesheet" />


</head>

<body>

   <header>
      <h1>Elige un Modo de Juego</h1>
   </header>
   <main>

      <table>
         <tr>
            <td><button type="button" class="btn btn-primary">AÑOS 80</button><br></td>
            <td><button type="button" class="btn btn-primary" disabled="true" id="a2000">AÑOS 2000<br><span>-Próximamente-<span></button></td>
         </tr>
         <tr>
            <td><button type="button" class="btn btn-primary" disabled="true" id="a90">AÑOS 90<br><span>-Próximamente-<span></button></td> 
         <td><button type="button" class="btn btn-primary" disabled="true" id="act">ACTUALIDAD<br><span>-Próximamente-<span></button></td>
            </tr>
      </table>
    
   </main>
</body>

</html>