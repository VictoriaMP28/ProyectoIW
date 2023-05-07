<?php
class Estetica extends Reserva {
    // Propiedades adicionales
    protected $tipo_servicio;
    protected $detalles_servicio;

    // Constructor
    public function __construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion, $tipo_servicio, $detalles_servicio) {
        parent::__construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion);
        $this->tipo_servicio = $tipo_servicio;
        $this->detalles_servicio = $detalles_servicio;
    }

    // Métodos adicionales
    public function getTipoServicio() {
        return $this->tipo_servicio;
    }

    public function setTipoServicio($tipo_servicio) {
        $this->tipo_servicio = $tipo_servicio;
    }

    public function getDetallesServicio() {
        return $this->detalles_servicio;
    }

    public function setDetallesServicio($detalles_servicio) {
        $this->detalles_servicio = $detalles_servicio;
    }
}
?>