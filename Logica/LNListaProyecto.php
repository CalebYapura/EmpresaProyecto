<?php
    require_once ("../Modelo/DBProyecto.php");

	class LNListaProyecto
	{
        private $objDBProyecto;

        function __construct()
		{
            $this->objDBProyecto = new DBProyecto();
		}

        public function listaDeProyectos()
		{   
			$listaDeProyectos = $this->objDBProyecto->listaDeProyectos();
			return $listaDeProyectos;
        }
        
    }
?>