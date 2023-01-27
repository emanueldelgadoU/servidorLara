<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Mi primera pagina laravel</h3>


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

        <tr>
            <td scope="col">{{ $incidencia->latitud}}</td>
            <td scope="col">{{ $incidencia->longitud}}<td>
            <td scope="col">{{ $incidencia->ciudad}}</td>
            <td scope="col">{{ $incidencia->direccion}}</td>
            <td scope="col">{{ $incidencia->descripcion}}</td>
            <td scope="col">{{ $incidencia->estado}}</td>

        </tr>


</body>
</html>
