<?php
     require_once("Empresa.php");
  class Proyecto
  {
    //propiedades de la clase proyecto
    private $idProyecto;
    private $idEmpresa;
    private $nombre;
    private $fechaInicio;
    private $fechaFin;
    private $fechaRealCulminacion;
    private $descripcion;
    private $activo;
    //idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo 
    //constructor
    function __construct()
    { 
    }
    //funciones SET del proyecto, se colocan los datos
    public function setIdProyecto($idProyecto){$this->idProyecto = $idProyecto;}
    public function setIdEmpresa($idEmpresa){$this->idEmpresa = $idEmpresa;}
    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setFechaInicio($fechaInicio){$this->fechaInicio = $fechaInicio;}
    public function setFechaFin($fechaFin){$this->fechaFin = $fechaFin;}
    public function setFechaRealCulminacion($fechaRealCulminacion){$this->fechaRealCulminacion = $fechaRealCulminacion;}
    public function setDescripcion($descripcion){$this->descripcion= $descripcion;}
    public function setActivo($activo){$this->activo = $activo;}

    //funciones GET del proyecto, devuelven los datos
    public function getIdProyecto(){return $this->idProyecto;}
    public function getIdEmpresa(){return $this->idEmpresa;}
    public function getNombre(){return $this->nombre;}
    public function getFechaInicio(){return $this->fechaInicio;}
    public function getFechaFin(){return $this->fechaFin;}
    public function getFechaRealCulminacion(){return $this->fechaRealCulminacion ;}
    public function getDescripcion(){return $this->descripcion;}
    public function getActivo(){return $this->activo;}
  }//end class proyecto

 ?>