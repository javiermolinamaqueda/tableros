<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tableritos V2.0</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body>
    	
    	<div class="container">

    		<header class="mt-4">
    			<h1>Listado de Tableros</h1>
    			<a href="">Añadir tablero</a>
    		</header>

            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Nombre del tablero</th>
                    <th>Fecha</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                @foreach($info as $item)

                    <tr>
                        <td>{{ $item->idTab }}</td>
                        <td>{{ $item->nombre }}</td>
                        <td>@df($item)</td>
                        <td><a href="{{ route('ver.nota', ['id' => $item->idTab]) }}">ver</a></td>
                        <td><a href="{{ route('editar.tablero', ['id' => $item->idTab]) }}">editar</a></td>
                        <td><a href="">borrar</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

    	</div>

    </body>
</html>