<?php
class MedicoVeterinario {
    // Propiedades
    private $id;
    private $nombre;
    private $especialidad;
    private $mascotasAtendidas;
    private $citas;

    // Constructor
    public function __construct($id, $nombre, $especialidad) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->especialidad = $especialidad;
        $this->mascotasAtendidas = array();
        $this->citas = array();
    }

    // Métodos
    public function agregarMascota($mascota) {
        array_push($this->mascotasAtendidas, $mascota);
    }
    
    public function eliminarMascota($mascota) {
        $index = array_search($mascota, $this->mascotasAtendidas);
        if ($index !== false) {
            array_splice($this->mascotasAtendidas, $index, 1);
            return true;
        }
        return false;
    }

    public function agregarCita($cita) {
        array_push($this->citas, $cita);
    }
    
    public function eliminarCita($cita) {
        $index = array_search($cita, $this->citas);
        if ($index !== false) {
            array_splice($this->citas, $index, 1);
            return true;
        }
        return false;
    }

    public function getMascotasAtendidas() {
        return $this->mascotasAtendidas;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEspecialidad() {
        return $this->especialidad;
    }

    public function setEspecialidad($especialidad) {
        $this->especialidad = $especialidad;
    }

    public function __toString() {
        $mascotas_str = "";
        foreach ($this->mascotasAtendidas as $mascota) {
            $mascotas_str .= $mascota->__toString() . "\n";
        }
        $citas_str = "";
        foreach ($this->citas as $cita) {
            $citas_str .= $cita->__toString() . "\n";
        }
        return "Médico: " . $this->nombre . " (Especialidad: " . $this->especialidad . ")\nMascotas atendidas:\n" . $mascotas_str . ")\nCitas:\n" . $citas_str;
    }
}
?>