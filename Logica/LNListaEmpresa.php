<?php
    require_once("../Modelo/DBEmpresa.php");

	class LNListaEmpresa
	{
		private $objDBEmpresa;

		function __construct()
		{
            $this->objDBEmpresa = new DBEmpresa();
		}

		public function listaDeEmpresas()
		{   
			$listaDeEmpresas = $this->objDBEmpresa->listaDeEmpresas();

			return $listaDeEmpresas;
		}
        
        public function datosEmpresa($idEmpresa)
		{
			$datosEmpresa = $this->objDBEmpresa->datosEmpresa($idEmpresa);
			return $datosEmpresa;
		}


		public function listaDeEmpresasActivos($consulta)
		{
			$listaDeEmpresasActivos = $this->objDBEmpresa->listaDeEmpresasActivos($consulta);

			return $listaDeEmpresasActivos;
		}

	}//end class

 ?>















