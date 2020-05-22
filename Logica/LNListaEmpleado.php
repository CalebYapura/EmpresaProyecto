<?php
    require_once("../Modelo/DBEmpleado.php");

    class LNListaEmpleado
    {
        private $objDBEmpleado;

        public function __construct()
        {
            $this->objDBEmpleado = new DBEmpleado();
        }

        public function listaDeEmpleados()
        {
            $listaDeEmpleados = $this->objDBEmpleado->listaDeEmpleados();

            return $listaDeEmpleados;
        }
        //recuperando datos del empleado
        public function datosEmpleado($idEmpleado)
		{
			$datosEmpleado = $this->objDBEmpleado->datosEmpleado($idEmpleado);
			return $datosEmpleado;
		}

	}//end class
 ?>















