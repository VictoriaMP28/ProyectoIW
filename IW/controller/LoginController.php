<?php
require_once '../model/data/DAO/UsuarioDAO.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $usuarioDAO = new UsuarioDAO();
    $existeUsuario = $usuarioDAO->existeUsuario($usuario, $password);

    if ($existeUsuario) {
        echo 'El usuario existe';
    } else {
        echo 'El usuario no existe';
    }
}

?>
