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
    			<h1>Listado de Notas</h1>
    			<a href="">Añadir nota</a>
    		</header>

           <table class="table">
                <thead>
                    <th>#</th>
                    <th>Texto</th>
                    <th>Fecha</th>
                    <th>Completado</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                @foreach($info as $item)

                    <tr>
                        <td>{{ $item->idNot }}</td>
                        <td>{{ $item->texto }}</td>
                        <td>@df($item)</td>
                        <td>{{ $item->completado }}</td>
                        <td><a href="">ver</a></td>
                        <td><a href="">editar</a></td>
                        <td><a href="">borrar</a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

    	</div>

    </body>
</html>