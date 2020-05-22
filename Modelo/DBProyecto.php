<?php
    require_once("../Modelo/Conexion.php");
	class DBProyecto
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

		public function listaDeProyectos()
		{
			$sqlListaDeProyectos = "SELECT em.nombre AS nombreEmpresa, p.nombre AS nombreProyecto,
            COUNT(e.idEmpleado) AS cantidadEmpleados, p.activo
			FROM empleado e INNER JOIN asignacionProyecto ap
			ON e.idEmpleado = ap.idEmpleado
			INNER JOIN proyecto p
			ON ap.idProyecto = p.idProyecto
			INNER JOIN empresa em
			ON p.idEmpresa = em.idEmpresa
			GROUP BY nombreProyecto
			ORDER BY em.nombre, p.nombre;
				";
			$cmd = $this->conexion->prepare($sqlListaDeProyectos);
			$cmd->execute();
			$listaDeProyectosConsulta = $cmd->fetchAll();
			return $listaDeProyectosConsulta;
        }//end function

        public function registrarProyecto($idProyecto,$idEmpresa,$nombre,$fechaInicio,$fechaFin,$fechaRealCulminacion,$descripcion,$activo)
        {
            $sqlInsertarEmpresa= "
            INSERT INTO proyecto(idProyecto,idEmpresa,nombre,fechaInicio,fechaFin,fechaRealCulminacion,descripcion,activo)
            VALUES(:idProyecto,:idEmpresa,:nombre,:fechaInicio,:fechaFin,:fechaRealCulminacion,:descripcion,:activo);";

            try {
                $cmd = $this->conexion->prepare($sqlInsertarEmpresa);
                $cmd->bindParam(':idProyecto', $idProyecto);
                $cmd->bindParam(':idEmpresa', $idEmpresa);
                $cmd->bindParam(':nombre', $nombre);
                $cmd->bindParam(':fechaInicio', $fechaInicio);
                $cmd->bindParam(':fechaFin', $fechaFin);
                $cmd->bindParam(':fechaRealCulminacion', $fechaRealCulminacion);
                $cmd->bindParam(':descripcion', $descripcion);
                $cmd->bindParam(':activo', $activo);
                if ($cmd->execute()) {
                    return 1;
                } else {
                    return 0;
                }
            } catch (PDOException $e) {
                echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
                exit();
                return 0;
            }
        }

//validando el nit de empresa
    public function ValidarIdProyecto($nit)
    {
        $sqlValidaIdProyecto = "SELECT * FROM proyecto WHERE idProyecto = :idProyecto";
        $cmd = $this->conexion->prepare($sqlValidaIdProyecto);
        $cmd->bindParam(':idProyecto', $idProyecto);
        $cmd->execute();

        $resultado = $cmd->fetch();

        if ($resultado) {
            return 1;
        } else {
            return 0;
        }
    }
    //recuperando datos del proyecto pra actualizar
    public function datosProyecto($idProyecto)
    {
        $sqlDatosProyecto = "SELECT * FROM proyecto WHERE idProyecto = :idproyecto;";
        $cmd = $this->conexion->prepare($sqlDatosProyecto);
        $cmd->bindParam(':idProyecto', $idProyecto);
        $cmd->execute();

        $datosProyecto = $cmd->fetch();

        if ($datosProyecto) {
            return $datosProyecto;
        } else {
            return null;
        }
    }

    }
?>