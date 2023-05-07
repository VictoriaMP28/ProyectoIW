<?php

class ConexionBD {
    private $conexion;

    public function __construct() {
        //$propiedades = parse_ini_file('../../../config/properties/database.properties');
        //$propiedades = parse_ini_file('C:\xampp\htdocs\IW\config\properties\database.properties');
        $propiedades = parse_ini_file(__DIR__ . '/../../../../config/properties/database.properties');
        $dsn = "mysql:host={$propiedades['database.host']};dbname={$propiedades['database.name']}";
        $usuario = $propiedades['database.user'];
        $contrasena = $propiedades['database.password'];

        try {
            $this->conexion = new PDO($dsn, $usuario, $contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error al conectarse a la base de datos: ' . $e->getMessage());
        }
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrarConexion() {
        $this->conexion = null;
    }
}
?>