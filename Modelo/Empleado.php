<?php
  class Empleado
  {
    //propiedades de la clase Empleado
    private $idEmpleado;
    private $idRol;
    private $ci;
    private $primerNombre;
    private $segundoNombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $celular;
    private $usuario;
    private $contrasenia;
    private $fechaIngreso;
    private $fechaActualizacion;
    private $fechaRetiro;
    private $imagenCiAnverso;
    private $imagenCiReverso;
    private $activo;
//idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,
//fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado
    //constructor
    function __construct()
    { 
    }
    //funciones SET del empleado, se colocan los datos
    public function setIdEmpleado($idEmpleado){$this->idEmpleado = $idEmpleado;}
    public function setIdRol($idRol){$this->idRol = $idRol;}
    public function setCi($ci){$this->ci = $ci;}
    public function setPrimerNombre($primerNombre){$this->primerNombre = $primerNombre;}
    public function setSegundoNombre($segundoNombre){$this->segundoNombre = $segundoNombre;}
    public function setApellidoPaterno($apellidoPaterno){$this->apellidoPaterno = $apellidoPaterno;}
    public function setApellidoMaterno($apellidoMaterno){$this->apellidoMaterno = $apellidoMaterno;}
    public function setCelular($celular){$this->celular = $celular;}
    public function setUsuario($usuario){$this->usuario = $usuario;}
    public function setContrasenia($contrasenia){$this->contrasenia = $contrasenia;}
    public function setfechaIngreso($fechaIngreso){$this->fechaIngresogenero = $fechaIngreso;}
    public function setfechaActualizacion($fechaActualizacion){$this->fechaActualizacion = $fechaActualizacion;}
    public function setfechaRetiro($fechaRetiro){$this->fechaRetiro = $fechaRetiro;}
    public function setimagenCiAnverso($imagenCiAnverso){$this->imagenCiAnverso = $imagenCiAnverso;}
    public function setGenero($imagenCiReverso){$this->imagenCiReverso = $imagenCiReverso;}
    public function setActivo($activo){$this->activo = $activo;}

    //funciones GET del empleado, devuelven los datos
    public function getIdEmpleado(){return $this->idEmpleado;}
    public function getIdRol(){return $this->idRol;}
    public function getCi(){return $this->ci;}
    public function getPrimerNombre(){return $this->primerNombre;}
    public function getSegundoNombre(){return $this->segundoNombre;}
    public function getApellidoPaterno(){return $this->apellidoPaterno;}
    public function getApellidoMaterno(){return $this->apellidoMaterno;}
    public function getCelular(){return $this->celular;}
    public function getUsuario(){return $this->usuario;}
    public function getContrasenia(){return $this->contrasenia;}
    public function getfechaIngreso(){return $this->fechaIngresogenero;}
    public function getfechaActualizacion(){return $this->fechaActualizacion;}
    public function getfechaRetiro(){return $this->fechaRetiro;}
    public function getimagenCiAnverso(){return $this->imagenCiAnverso;}
    public function getGenero(){return $this->imagenCiReverso;}
    public function getActivo(){return $this->activo;}

  }//end class Empleado

 ?>