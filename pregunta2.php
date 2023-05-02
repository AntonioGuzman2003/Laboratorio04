<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/styles.css">
	<title>Bienvenido</title>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h1 class="text-center">Bienvenido</h1>
			</div>

		<?php
		$nombre = $_POST["nombre"];
		$direccion = $_POST["direccion"];
		$email = $_POST["email"];
		$edad = $_POST["edad"];

		echo "<p>¡Hola $nombre! </p>";
        echo "<p>Tu dirección es $direccion</p>";
        echo "<p>tienes $edad años y tu correo es $email.</p>";
	?>
</body>
</html>

