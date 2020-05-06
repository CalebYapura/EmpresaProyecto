<?php

  class Empresa
  {
    //propiedades de la clase Empresa
    private $idEmpresa;
    private $nit;
    private $nombre;
    private $direccion;
    private $logo;
    private $telefono;
    private $descripcion;
    private $activo;
    
    //constructor
    function __construct()
    { 
    }

    //funciones SET del empleado, se colocan los datos
    public function setIdEmpleado($idEmpresa){$this->idEmpresa = $idEmpresa;}
    public function setNit($nit){$this->nit = $nit;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setDireccion($direccion){$this->direccion = $direccion;}
    public function setLogo($logo){$this->logo = $logo;}
    public function setTelefono($telefono){$this->telefono = $telefono;}
    public function setDescripcion($descripcion){$this->descripcion = $descripcion;}
    public function setActivo($activo){$this->activo = $activo;}

    //funciones GET del empleado, devuelven los datos
    public function getIdEmpresa(){return $this->idEmpresa;}
    public function getNit(){return $this->nit;}
    public function getNombre(){return $this->nombre;}
    public function getDireccion(){return $this->direccion;}
    public function getLogo(){return $this->logo;}
    public function getTelefono(){return $this->telefono;}
    public function getDescripcion(){return $this->descripcion;}
    public function getActivo(){return $this->activo;}
  }//end class Empleado

 ?>