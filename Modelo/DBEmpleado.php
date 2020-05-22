<?php
    require_once("../Modelo/Conexion.php");
    class DBEmpleado
    {
        private $conexion;

        public function __construct()
        {
            $this->conexion =  new Conexion();
        }

        public function listaDeEmpleados()
        {   
            $sqlListaDeEmpleados = "SELECT e.idEmpleado,ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno)as nombreEmpleado,
            COUNT(p.idProyecto) AS cantidadproyectos, SUM(ap.horasTrabajo) AS HorasTrabajadas
           FROM empleado e INNER JOIN asignacionProyecto ap
           ON e.idEmpleado = ap.idEmpleado
           INNER JOIN proyecto p
           ON ap.idProyecto = p.idProyecto
           GROUP BY nombreEmpleado
           ORDER BY nombreEmpleado;";
            $cmd = $this->conexion->prepare($sqlListaDeEmpleados);
            $cmd->execute();
            $listaDeEmpleadosConsulta = $cmd->fetchAll();
            return $listaDeEmpleadosConsulta;
        }


        public function registrarEmpleado($idRol,$ci,$primerNombre,$segundoNombre,$apellidoPaterno,$apellidoMaterno,$celular,$usuario,$contrasenia,
                                          $fechaIngreso,$fechaActualizacion,$fechaRetiro,$imagenCiAnverso,$imagenCiReverso,$estado)
        {
            $sqlInsertarEmpleado= "INSERT INTO empleado(idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,fechaIngreso,
fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,activo)
                                   VALUES (:ci,:primerNombre,:segundoNombre,:apellidoPaterno,:apellidoMaterno,:celular,:usuario,:contrasenia,:fechaIngreso,
                                :fechaActualizacion,:fechaRetiro,:imagenCiAnverso,:imagenCiReverso,:activo);";

            try {
                $cmd = $this->conexion->prepare($sqlInsertarEmpleado);

                $cmd->bindParam(':idRol', $idRol);
                $cmd->bindParam(':ci', $ci);
                $cmd->bindParam(':primerNombre', $primerNombre);
                $cmd->bindParam(':segundoNombre', $segundoNombre);
                $cmd->bindParam(':apellidoPaterno', $apellidoPaterno);
                $cmd->bindParam(':apellidoMaterno', $apellidoMaterno);
                $cmd->bindParam(':celular', $celular);
                $cmd->bindParam(':usuario', $usuario);
                $cmd->bindParam(':contrasenia', $contrasenia);
                $cmd->bindParam(':fechaIngreso', $fechaIngreso);
                $cmd->bindParam(':fechaActualizacion', $fechaActualizacion);
                $cmd->bindParam(':fechaRetiro', $fechaRetiro);
                $cmd->bindParam(':imagenCiAnverso', $imagenCiAnverso);
                $cmd->bindParam(':imagenCiReverso', $imagenCiReverso);
                $cmd->bindParam(':estado', $estado);
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


        public function ValidarCiModelo($ci)
        {
            $sqlValidarCi = "SELECT * FROM empleado WHERE ci = :ci";
            $cmd = $this->conexion->prepare($sqlValidarCi);
            $cmd->bindParam(':ci', $ci);
            $cmd->execute();

            $resultado = $cmd->fetch();

            if ($resultado) {
                return 1;
            } else {
                return 0;
            }
        }
        public function datosEmpleado($idEmpleado)
        {
            $sqlDatosEmpleado = "SELECT * FROM empleado WHERE idEmpleado = :idEmpleado;";
            $cmd = $this->conexion->prepare($sqlDatosEmpleado);
            $cmd->bindParam(':idEmpleado', $idEmpleado);
            $cmd->execute();

            $datosEmpleado = $cmd->fetch();

            if ($datosEmpleado) {
                return $datosEmpleado;
            } else {
                return null;
            }
        }
        public function ListaDeRol(){

            $sqlListaDeRol = "SELECT * FROM rol";
            $cmd = $this->conexion->prepare($sqlListaDeRol);
            $cmd->execute();
            $listaDeRolConsulta = $cmd->fetchAll();
            return $listaDeRolConsulta;
        }
        #FUNCION PARA ACTUALIZAR LOS DATOS DEL EMPLEADO
        public function ActualizarEmpleado( $idEmpleado,$idRol,$ci,$primerNombre,$segundoNombre,$apellidoPaterno,$apellidoMaterno,$celular,$usuario,$contrasenia,
    $fechaIngreso,$fechaActualizacion,$fechaRetiro,$imagenCiAnverso,$imagenCiReverso,$estado)
        {
            $sqlActualizarEmpleado = "UPDATE empleado 
            SET ci=:ci,primerNombre=:primerNombre,segundoNombre=:segundoNombre,apellidoPaterno=:apellidoPaterno,apellidoMaterno=:apellidoMaterno,celular=:celular,usuario=:usuario,contrasenia=:contrasenia,
            fechaIngreso=:fechaIngreso,fechaActualizacion=:fechaActualizacion,fechaRetiro=:fechaRetiro,imagenCiAnverso=:imagenCiAnverso,imagenCiReverso=:imagenCiReverso,estado=:estado 
            WHERE idEmpleado=:idEmpleado;";
            try {
                $cmd = $this->conexion->prepare($sqlActualizarEmpleado);

                $cmd->bindParam(':ci', $ci);
                $cmd->bindParam(':idRol', $idRol);
                $cmd->bindParam(':primerNombre', $primerNombre);
                $cmd->bindParam(':segundoNombre', $segundoNombre);
                $cmd->bindParam(':apellidoPaterno', $apellidoPaterno);
                $cmd->bindParam(':apellidoMaterno', $apellidoMaterno);
                $cmd->bindParam(':celular', $celular);
                $cmd->bindParam(':usuario', $usuario);
                $cmd->bindParam(':contrasenia', $contrasenia);
                $cmd->bindParam(':fechaIngreso', $fechaIngreso);
                $cmd->bindParam(':fechaActualizacion', $fechaActualizacion);
                $cmd->bindParam(':fechaRetiro', $fechaRetiro);
                $cmd->bindParam(':imagenCiAnverso', $imagenCiAnverso);
                $cmd->bindParam(':imagenCiReverso', $imagenCiReverso);
                $cmd->bindParam(':estado', $estado);
                $cmd->bindParam(':idEmpleado', $idEmpleado);

                if ($cmd->execute()) {
                    return 1;
                } else {
                    return 0;
                }
            } catch (PDOException $e) {
                echo 'ERROR: No se logro actualizar los datos - '.$e->getMesage();
                exit();
                return 0;
            }
        }

        #FUNCION ELIMINANDO LOS DATOS DEL EMPLEADO
        public function EliminarEmpleado($idEmpleado)
        {
            $sqlEliminarEmpleado = "DELETE FROM empleado WHERE idEmpleado = :idEmpleado;";

            try {
                $cmd = $this->conexion->prepare($sqlEliminarEmpleado);
                $cmd->bindParam(':idEmpleado', $idEmpleado);

                if ($cmd->execute()) {
                    return 1;
                } else {
                    return 0;
                }
            } catch (PDOException $e) {
                echo 'ERROR: No se pudo eliminar los datos '.$e->getMesage();
            }
        }
        //lista de empleados activos
        public function listaDeEmpleadoActivos()
        {
            $sqlListaEmpleadosActivos = "
           SELECT idEmpleado, ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,
            apellidoMaterno)as nombreEmpleado,celular, estado
            FROM empleado
            WHERE estado = 1
            ORDER BY primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno;";
            $cmd = $this->conexion->prepare($sqlListaEmpleadosActivos);
            $cmd->execute();
            $listaDeEmpleadosConsulta = $cmd->fetchAll();
            return $listaDeEmpleadosConsulta;
        }
        // lista de emplados por jefe  y departamento

        public function listaDeEmpleadosMasProyecto($idEmpleadoJ)
        {
            $sqlListaEmpleadosActivos =" SELECT ci, CONCAT_WS(' ',primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno)as nombreEmpleado, p.nombre AS proyectos
FROM empleado e INNER JOIN asignacionProyecto ap
ON e.idEmpleado = ap.idEmpleado
INNER JOIN proyecto p
ON ap.idProyecto = p.idProyecto
GROUP BY nombreEmpleado
ORDER BY nombreEmpleado;";
            $cmd = $this->conexion->prepare($sqlListaEmpleadosActivos);
            $cmd->bindParam(':idEmpleado', $idEmpleadoJ);
            $cmd->execute();
            $listaDeEmpleadosConsulta = $cmd->fetchAll();
            return $listaDeEmpleadosConsulta;
        }

        // autenticacion de usuaruo y contrasenia
        public function verificarUsuarioContrasenia($usuario, $contrasenia)
        {
            $sqlVerificarusuario = "
           SELECT *
              FROM rol r INNER JOIN empleado e
              ON e.idRol = r.idRol
              WHERE usuario = :usuario
              AND contrasenia = :contrasenia";

            $cmd = $this->conexion->prepare($sqlVerificarusuario);
            $cmd->bindParam(':usuario', $usuario);
            $cmd->bindParam(':contrasenia', $contrasenia);
            $cmd->execute();
            $registroUsuario = $cmd->fetch();
            return $registroUsuario;
        }
    }//end class


?>





