<?php

    require_once("../Modelo/DBEmpresa.php");

    $objetoDBEmpresa = new DBEmpresa();


    $activo = ($_REQUEST['activo'] == 'S')? 1 : 0;

     if ($_REQUEST['nitEmprAntiguo'] == $_REQUEST['nit']) {
         $exitoActualizar = $objetoDBEmpresa->ActualizarEmpresa(
             $_REQUEST['idEmpresa'],
             $_REQUEST['nit'],
             $_REQUEST['nombre'],
             $_REQUEST['direccion'],
             $_REQUEST['cantidadProyectos'],
             $_REQUEST['logo'],
             $_REQUEST['telefono'],
             $_REQUEST['descripcion'],
             $activo
         );
         if ($exitoActualizar==1) {
             echo "Los datos del empleado se actualizaron correctamente";
         } else {
             echo "Error en la actualizacion de datos del empleado";
         }
     } else {
         $validacionNit = $objetoDBEmpresa->ValidarNit($_REQUEST['nit']);

         if ($validacionNit == 1) {
             echo "el nit que usted desea registrar ya existe";
         } else {
             $exitoActualizar = $objetoDBEmpresa->ActualizarEmpresa(
                 $_REQUEST['idEmpresa'],
                 $_REQUEST['nit'],
                 $_REQUEST['nombre'],
                 $_REQUEST['direccion'],
                 $_REQUEST['cantidadProyectos'],
                 $_REQUEST['logo'],
                 $_REQUEST['telefono'],
                 $_REQUEST['descripcion'],
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
<h3 title="Volver Lista Empresas"> <a href="../Vista/IUListaEmpresas.php">Lista de Empresas</a></h3>
