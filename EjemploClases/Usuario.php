<?php

class Usuario{
    private $sRut;
    private $sNombre;
    private $sApellido;
    
    function __construct($rut, $nom, $apell) {
        $this->sRut = $rut;
        $this->sNombre = $nom;
        $this->sApellido = $apell;
    }
    
    function getSRut() {
        return $this->sRut;
    }

    function getSNombre() {
        return $this->sNombre;
    }

    function getSApellido() {
        return $this->sApellido;
    }

    function setSRut($sRut) {
        $this->sRut = $sRut;
    }

    function setSNombre($sNombre) {
        $this->sNombre = $sNombre;
    }

    function setSApellido($sApellido) {
        $this->sApellido = $sApellido;
    }


}


?>
