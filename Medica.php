<?php
class Medica extends Reserva {
    // Propiedades adicionales
    protected $motivo_consulta;
    protected $diagnostico;
    protected $tratamiento;

    // Constructor
    public function __construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion, $motivo_consulta, $diagnostico, $tratamiento) {
        parent::__construct($id_reserva, $correo_usuario, $fecha, $hora, $mascota, $duracion);
        $this->motivo_consulta = $motivo_consulta;
        $this->diagnostico = $diagnostico;
        $this->tratamiento = $tratamiento;
    }

    // Métodos adicionales
    public function getMotivoConsulta() {
        return $this->motivo_consulta;
    }

    public function setMotivoConsulta($motivo_consulta) {
        $this->motivo_consulta = $motivo_consulta;
    }

    public function getDiagnostico() {
        return $this->diagnostico;
    }

    public function setDiagnostico($diagnostico) {
        $this->diagnostico = $diagnostico;
    }

    public function getTratamiento() {
        return $this->tratamiento;
    }

    public function setTratamiento($tratamiento) {
        $this->tratamiento = $tratamiento;
    }
}
?>