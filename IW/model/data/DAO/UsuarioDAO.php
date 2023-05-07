<?php
require_once 'common/ConexionBD.php';

class UsuarioDAO {
    private $conexion;

    public function __construct() {
        $this->conexion = (new ConexionBD())->getConexion();
    }

    public function existeUsuario($nombre, $password) {
        //$config = parse_ini_file('../../../config/properties/queries.properties');
        //$config = parse_ini_file('C:\xampp\htdocs\IW\config\properties\queries.properties');
        $config = parse_ini_file(__DIR__ . '/../../../config/properties/queries.properties');
        $consulta = $config['select.user.by.name.and.password'];
        $sentencia = $this->conexion->prepare($consulta);
        //$sentencia->execute([$nombre, $password]);
        $sentencia->execute([':usuario' => $nombre, ':password' => $password]);
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return count($resultado) > 0;
    }

    public function usuarioRegistrado($correo) {
        $config = parse_ini_file(__DIR__ . '/../../../config/properties/queries.properties');
        $consulta = $config['select.user.by.mail'];
        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->execute([':correo' => $correo]);
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return count($resultado) > 0;
    }

    public function registrarUsuario($correo, $nombre, $apellidos, $telefono, $password) {
        $tipo = 'cliente';
        $config = parse_ini_file(__DIR__ . '/../../../config/properties/queries.properties');
        $consulta = $config['register.user'];
        $sentencia = $this->conexion->prepare($consulta);
        $sentencia->execute([':correo' => $correo, ':password' => $password, ':nombre' => $nombre, ':apellidos' => $apellidos, ':tipo' => $tipo, ':telefono' => $telefono]);
        
        return ;
    }

}

?>
