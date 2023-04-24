<?php
class Mascota {
    // Propiedades
    private $id;
    private $nombre;
    private $especie;
    private $edad;
    private $ultimaVisita;
    private $patologias;
    private $tratamiento;

    // Constructor
    public function __construct($id,$nombre, $especie, $edad, $ultimaVisita, $tratamiento) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->especie = $especie;
        $this->edad = $edad;
        $this->ultimaVisita = $ultimaVisita;
        $this->patologias = array();
        $this->tratamiento = $tratamiento;
    }

    // Métodos
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

    public function getEspecie() {
        return $this->especie;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getUltimaVisita() {
        return $this->ultimaVisita;
    }

    public function agregarPatologia($patologia) {
        array_push($this->patologias, $patologia);
    }

    public function getPatologias() {
        return $this->patologias;
    }

    public function getTratamiento() {
        return $this->tratamiento;
    }

    public function setTratamiento($tratamiento) {
        $this->edad = $tratamiento;
    }

    public function __toString() {
        return "- " . $this->nombre . " (" . $this->especie . ", " . $this->edad . " años, " . ", " . $this->edad . " última visita: " . $this->ultimaVisita .  ")";
    }
}

?>