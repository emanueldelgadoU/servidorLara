<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

<thead>
<tr>
    <th scope="col">latitud</th>
    <th scope="col">longitud</th>
    <th scope="col">ciudad</th>
    <th scope="col">direccion</th>
    <th scope="col">descripcion</th>
    <th scope="col">estado</th>
    <th scope="col">acciones</th>
</tr>
</thead>


    <table class="table table-striped table-hover">

        @foreach ($incidencias as $incidencia )

        <tr>
            <td scope="col">{{ $incidencia->latitud}}</td>
            <td scope="col">{{ $incidencia->longitud}}<td>
            <td scope="col">{{ $incidencia->ciudad}}</td>
            <td scope="col">{{ $incidencia->direccion}}</td>
            <td scope="col">{{ $incidencia->descripcion}}</td>
            <td scope="col">{{ $incidencia->estado}}</td>
            <td><a href="/incidencia/{{$incidencia->id}}">Detalle</a></td>
        </tr>


        @endforeach

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
