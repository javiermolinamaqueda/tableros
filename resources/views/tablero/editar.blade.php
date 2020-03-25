<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<div class="container">

		<h1 class="mt-4">Tableros: Editar</h1>

		<form action="{{ route('actualizar.tablero') }}" method="get">

			<label for="id">ID: </label>
			<input type="text" id="id" name="id" value= "{{ $dat->idTab }}" readonly />
			<br/>			
			<label for="nom">Nombre del tablero: </label>
			<input type="text" id="nom" name="nom" value="{{ $dat->nombre }}" />
			<br/>
			<label for="fec">Fecha de creación: </label>
			<input type="date" id="fec" name="fec" value="{{ $dat->fecha }}" />
			<br/>
			<button type="submit">Guardar</button>
		</form>

	</div>

</body>
</html>