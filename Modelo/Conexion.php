<?php

	class Conexion extends PDO
	{
		private $tipoDB = 'mysql';
		private $servidor = 'localhost'; //127.0.0.1
		private $user = 'root'; // usuario del gestor de base de datos
		private $password = ''; // password del usuario si tuviese
		private $db = 'empresaProyectos'; // nombre de la base de datos

		public function __construct()
		{
			try {
				  parent::__construct($this->tipoDB.':host='.$this->servidor.';dbname='.$this->db, $this->user, $this->password);
				  //echo "Conexion exitosa:   "." Usuario  ";
			} catch (PDOException $e ) {
				echo 'ERROR: No se logro hacer una conexion a la Base de Datos - '.$e->getMessage();
				exit;
			}
		}// end construct
	}// end class

	//$connect = new Conexion();
 ?>
