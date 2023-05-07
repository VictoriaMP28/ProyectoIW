<?php

require_once 'ConexionBD.php';

$conexion = new ConexionBD();
$pdo = $conexion->getConexion();

$consulta = $pdo->query('SELECT VERSION()');
$version = $consulta->fetchColumn();

echo "Versión del servidor de MySQL: $version";
?>