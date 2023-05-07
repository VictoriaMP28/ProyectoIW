<?php
class Guarderia extends Reserva {
    // Propiedades específicas de la Guardería
    protected $fecha_recogida;
    protected $hora_recogida;

    // Constructor
    public function __construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion, $fecha_recogida, $hora_recogida) {
        parent::__construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion);
        $this->fecha_recogida = $fecha_recogida;
        $this->hora_recogida = $hora_recogida;
    }

    // Métodos específicos de la Guardería
    public function getFechaRecogida() {
        return $this->fecha_recogida;
    }

    public function setFechaRecogida($fecha_recogida) {
        $this->fecha_recogida = $fecha_recogida;
    }

    public function getHoraRecogida() {
        return $this->hora_recogida;
    }

    public function setHoraRecogida($hora_recogida) {
        $this->hora_recogida = $hora_recogida;
    }
}

?>