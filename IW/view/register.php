<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro - Clínica Veterinaria</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="container">
		<h1>Registro de nuevo cliente</h1>
		<form action="../controller/RegisterController.php" method="POST">
			<label for="nombre">Nombre:</label>
			<input type="text" name="usuario" id="nombre" required>

			<label for="apellidos">Apellidos:</label>
			<input type="text" name="apellidos" id="apellidos" required>

			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>

			<label for="telefono">Teléfono:</label>
			<input type="tel" name="telefono" id="telefono" required>

			<label for="password">Contraseña:</label>
			<input type="password" name="password" id="password" required>

			<input type="submit" value="Registrarse">
		</form>
	</div>
</body>
</html>
