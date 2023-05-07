<?php
require_once '../model/data/DAO/UsuarioDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['email'];
    $nombre = $_POST['usuario'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];

    $usuarioDAO = new UsuarioDAO();
    $usuarioRegistrado = $usuarioDAO->usuarioRegistrado($correo);

    if ($usuarioRegistrado) {
        echo 'El usuario ya existe';
    } else {
        $usuarioDAO->registrarUsuario($correo,$nombre,$apellidos,$telefono,$password);
        echo 'Registro correcto';
    }
}

?>