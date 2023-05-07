<?php
class Usuario {
    // Propiedades
    private $nombre;
    private $telefono;
    private $mascotas;
    private $correo;
    private $password;
    private $rol;

    // Constructor
    public function __construct($nombre, $telefono, $correo, $password, $rol) {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
        $this->mascotas = array();
        $this->correo = $correo;
        $this->password = $password;
        $this->rol = $rol;
    }

    // Métodos
    public function agregarMascota($mascota) {
        array_push($this->mascotas, $mascota);
    }

    public function eliminarMascota($mascota) {
        $index = array_search($mascota, $this->mascotas);
        if ($index !== false) {
            array_splice($this->mascotas, $index, 1);
            return true;
        }
        return false;
    }

    public function getMascotas() {
        return $this->mascotas;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getRol() {
        return $this->telefono;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function __toString() {
        $mascotas_str = "";
        foreach ($this->mascotas as $mascota) {
            $mascotas_str .= $mascota->__toString() . "\n";
        }
        return "Cliente: " . $this->nombre . "Correo: " . $this->correo .  "Rol: " . $this->rol . " (Teléfono: " . $this->telefono . ")\nMascotas:\n" . $mascotas_str;
    }
}

?>