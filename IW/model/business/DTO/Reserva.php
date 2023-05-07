<?php

class Reserva {
    // Propiedades
    protected $id_reserva;
    protected $correo_usuario;
    protected $fecha;
    protected $hora;
    protected $mascota;
    protected $duracion;
    protected $tipo;

    // Constructor
    public function __construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion) {
        $this->id_reserva = $id_reserva;
        $this->correo_usuario = $correo_usuario;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->mascota = $mascota;
        $this->duracion = $duracion;
    }

    // Métodos
    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha() {
        return $this->fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function getMascota() {
        return $this->mascota;
    }

    public function setMascota($mascota) {
        $this->mascota = $mascota;
    }
}


?>