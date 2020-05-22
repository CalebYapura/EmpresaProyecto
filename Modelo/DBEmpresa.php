<?php
    require_once("../Modelo/Conexion.php");
    class DBEmpresa
    {
        private $conexion;

        public function __construct()
        {
            $this->conexion =  new Conexion();
        }

        public function listaDeEmpresas()
        {  
            $sqlListaDeEmpresas = "SELECT * 
            FROM empresa
            ORDER BY nombre asc;";
            $cmd = $this->conexion->prepare($sqlListaDeEmpresas);
            $cmd->execute();
            $listaDeEmpresasConsulta = $cmd->fetchAll();
            return $listaDeEmpresasConsulta;
        }
        
        public function registrarEmpresa($idEmpresa,$nit,$nombre,$direccion,$cantidadProyectos,$logo, $telefono,$descripcion, $activo)
        {
            $sqlInsertarEmpresa= "
            INSERT INTO empresa(idEmpresa,nit,nombre,direccion,logo,telefono,descripcion,activo)
            VALUES(:idEmpresa,:nit,:nombre,:direccion,:logo,:telefono,:descripcion,:activo);";

            try {
                $cmd = $this->conexion->prepare($sqlInsertarEmpresa);
                $cmd->bindParam(':idEmpresa', $idEmpresa);
                $cmd->bindParam(':nit', $nit);
                $cmd->bindParam(':nombre', $nombre);
                $cmd->bindParam(':direccion', $direccion);
                $cmd->bindParam(':logo', $logo);
                $cmd->bindParam(':telefono', $telefono);
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
        public function ValidarNit($nit)
        {
            $sqlValidarNit = "SELECT * FROM empresa WHERE nit = :nit";
            $cmd = $this->conexion->prepare($sqlValidarNit);
            $cmd->bindParam(':nit', $nit);
            $cmd->execute();

            $resultado = $cmd->fetch();

            if ($resultado) {
                return 1;
            } else {
                return 0;
            }
        }   
 //recuperando datos del departamento pra actualizar
        public function datosEmpresa($idEmpresa)
        {
            $sqlDatosEmpresa = "SELECT * FROM empresa WHERE idEmpresa = :idEmpresa;";
            $cmd = $this->conexion->prepare($sqlDatosEmpresa);
            $cmd->bindParam(':idEmpresa', $idEmpresa);
            $cmd->execute();

            $datosEmpresa = $cmd->fetch();

            if ($datosEmpresa) {
                return $datosEmpresa;
            } else {
                return null;
            }
        }
        public function ActualizarEmpresa($idEmpresa,$nit,$nombre,$direccion,$logo,$telefono,$descripcion,$activo)
        {
            $sqlActualizarEmpresa = " UPDATE empresa 
            SET nit=:nit,nombre=:nombre,direccion=:direccion,logo=:logo,telefono=:telefono,descripcion=:descripcion,activo=:activo 
            WHERE idEmpresa=:idEmpresa;";
            try {
                $cmd = $this->conexion->prepare($sqlActualizarEmpresa);
                $cmd->bindParam(':idEmpresa', $idEmpresa);
                $cmd->bindParam(':nit', $nit);
                $cmd->bindParam(':nombre', $nombre);
                $cmd->bindParam(':direccion', $direccion);
                $cmd->bindParam(':logo', $logo);
                $cmd->bindParam(':telefono', $telefono);
                $cmd->bindParam(':descripcion', $descripcion);
                $cmd->bindParam(':activo', $activo);
                if ($cmd->execute()) {
                    return 1;
                } else {
                    return 0;
                }
            } catch (PDOException $e) {
                echo 'ERROR: No se logro actualizar los datos de la empreza - '.$e->getMesage();
                exit();
                return 0;
            }
        }

  
        public function EliminarEmpresa($idEmpresa)
        {
            $sqlEliminarEmpresa = "DELETE FROM empresa WHERE idEmpresa = :idEmpresa;";

            try {
                $cmd = $this->conexion->prepare($sqlEliminarEmpresa);
                $cmd->bindParam(':idEmpresa', $idEmpresa);

                if ($cmd->execute()) {
                    return 1;
                } else {
                    return 0;
                }
            } catch (PDOException $e) {
                echo 'ERROR: No se pudo eliminar los datos de la empresa'.$e->getMesage();
            }
        }  
  //buscador   de empresas   
        public function buscadorEmpresa($nombre)
        {
            $consulta="SELECT * FROM empresa"; 

            $cmd = $this->conexion->prepare($consulta);

            if($nombre){
                $consulta+= "WHERE nombre LIKE '%:nombre%'";
                $cmd->bindParam(':nombre', $nombre);
            }


            $listaEmpresa= $cmd->fetch();
            return $listaEmpresa;
        }
  
        

    }//end class
     
    

?>