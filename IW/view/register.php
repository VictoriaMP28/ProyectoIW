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
		<form action="registro.php" method="post">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre" required>

			<label for="apellidos">Apellidos:</label>
			<input type="text" name="apellidos" id="apellidos" required>

            <label for="fecha_nacimiento">Fecha de nacimiento:</label>
			<input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>

			<label for="email">Email:</label>
			<input type="email" name="email" id="email" required>

			<label for="telefono">Teléfono:</label>
			<input type="tel" name="telefono" id="telefono" required>

			<label for="direccion">Dirección:</label>
			<input type="text" name="direccion" id="direccion" required>

			<label for="ciudad">Ciudad:</label>
			<input type="text" name="ciudad" id="ciudad" required>

			<label for="codigo_postal">Código postal:</label>
			<input type="text" name="codigo_postal" id="codigo_postal" required>

			<label for="pais">País:</label>
			<input type="text" name="pais" id="pais" required>

			<label for="password">Contraseña:</label>
			<input type="password" name="password" id="password" required>

			<input type="submit" value="Registrarse">
		</form>
	</div>
</body>
</html>
