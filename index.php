<!doctype html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
	</head>
	<body>
		<h1>Formulario</h1>
		<form id="formulario">
			<label for="nombre">Nombre:</label><br>
			<input type="text" name="nombre" id="nombre"><br><br>
			<label for="apaterno">Apellido Paterno:</label><br>
			<input type="text" name="apaterno" id="apaterno"><br><br>
			<label for="amaterno">Apellido Materno:</label><br>
			<input type="text" name="amaterno" id="amaterno"><br><br>
			<label for="pass">Contraseña:</label><br>
			<input type="password" name="pass" id="pass"><br><br>
			<label for="passrepeated">Repite contraseña:</label><br>
			<input type="password" name="passrepeated" id="passrepeated"><br><br>
			<button type="submit">Enviar</button>
		</form>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
   		<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
		<script src="./js/app.js"></script>
	</body>
</html>
