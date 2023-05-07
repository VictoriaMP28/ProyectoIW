<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="contenedor">
        <form action="../controller/LoginController.php" method="POST">
            <h1>Login</h1>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="password" id="contrasena" required>
            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>
