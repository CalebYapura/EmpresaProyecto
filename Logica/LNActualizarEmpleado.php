<?php

    require_once("../Modelo/DBEmpleado.php");

    $objetoDBEmpleado = new DBEmpleado();


    $activo = ($_REQUEST['activo'] == 'S')? 1 : 0;

     if ($_REQUEST['ciEmpAntiguo'] == $_REQUEST['ci']) {
         $exitoActualizar = $objetoDBEmpleado->ActualizarEmpleado(
             $_REQUEST['idEmpleado'],
             $_REQUEST['ci'],
             $_REQUEST['primerNombre'],
             $_REQUEST['segundoNombre'],
             $_REQUEST['apellidoPaterno'],
             $_REQUEST['apellidoMaterno'],
             $_REQUEST['telefono'],
             $_REQUEST['genero'],
             $_REQUEST['fechaNacimiento'],
             $activo
         );
         if ($exitoActualizar==1) {
             echo "Los datos del empleado se actualizaron correctamente";
         } else {
             echo "Error en la actualizacion de datos del empleado";
         }
     } else {
         $validacionCi = $objetoDBEmpleado->ValidarCiModelo($_REQUEST['ci']);

         if ($validacionCi == 1) {
             echo "el ci que usted desea registrar ya existe";
         } else {
             $exitoActualizar = $objetoDBEmpleado->ActualizarEmpleado(
                 $_REQUEST['idEmpleado'],
                 $_REQUEST['ci'],
                 $_REQUEST['primerNombre'],
                 $_REQUEST['segundoNombre'],
                 $_REQUEST['apellidoPaterno'],
                 $_REQUEST['apellidoMaterno'],
                 $_REQUEST['telefono'],
                 $_REQUEST['genero'],
                 $_REQUEST['fechaNacimiento'],
                 $activo
             );
             if ($exitoActualizar==1) {
                 echo "Los datos del empleado se actualizaron correctamente";
             } else {
                 echo "Error en la actualizacion de datos del empleado";
             }
         }
     }




?>
<br>
<h3 title="Volver Lista Empleados"> <a href="../Vista/IUListaEmpleado.php">Lista de Empleados</a></h3>
