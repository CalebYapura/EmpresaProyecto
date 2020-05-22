<?php
require_once("../Logica/LNListaProyecto.php");
$objLNListaProyectos = new LNListaProyecto();
$listaProyectos = $objLNListaProyectos->listaDeProyectos();

?>

<!DOCTYPE html>
<html>

<head>
    <title>proyectos</title>
</head>

<body>

    <h1>Lista de Proyectos</h1>
    <h3 title="Volver al inicio"> <a href="../index.php">Inicio</a></h3>
    <h3 align="center" title="Este es un Enlace a Listar Empresas"> <a href="./IURegistrarProyecto.php">Registrar</a>
    </h3>
    <table border=3>
        <tr>
            <th>Nombre Empresa</th>
            <th>Nombre Proyecto</th>
            <th>Cantidad Trabajadores</th>
            <th>Estado</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
        <?php 
     foreach($listaProyectos as $regitroProyectos){
  ?>
        <tr>
            <td><?php echo $regitroProyectos['nombreEmpresa'];?></td>
            <td><?php echo $regitroProyectos['nombreProyecto'];?></td>
            <td><?php echo $regitroProyectos['cantidadEmpleados'];?></td>
            <td><?php echo $regitroProyectos['activo'];?></td>

            <td><a href="../Vista/IUActualizarProyecto.php?idProyecto=<?php echo $regitroProyectos['idProyecto']; ?>">Actualizar</a>
            <td><a href="../Logica/LNEliminarProyecto.php?idProyevto=<?php echo $regitroProyectos['idProyecto']; ?>">Eliminar</a>

        </tr>
        <?php } ?>
    </table>


</html>