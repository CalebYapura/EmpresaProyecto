<?php
require_once("../Logica/LNListaEmpresa.php");
$objLNListaEmpresa = new LNListaEmpresa();
$listaEmpresas = $objLNListaEmpresa->listaDeEmpresas();

?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de Empresa</title>
</head>
<body style="background-color:##C8F7F1;">
<h1><font color="black">Lista de Empresa</font></h1>


<table border = 2>
<h3  align="center"  title = "Este es un Enlace a Listar Empresas"> <a href="./IURegistrarEmpresa.php">Registrar</a></h3>
<tr>

    <th>Logo</th>
    <th>Nombre</th>
    <th>Telefono</th>
    <th>Proyectos</th>    
    <th>Direccion</th>
    <th>Estado</th>
    <th>Descripcion</th>   
</tr>

  <?php 
     foreach($listaEmpresas as $registroEmpresas){
  ?>
  <tr>
    <td><?php echo $registroEmpresas['logo'];?></td>
    <td><?php echo $registroEmpresas['nombre'];?></td>
    <td><?php echo $registroEmpresas['telefono'];?></td>
    <td><?php echo $registroEmpresas['cantidadProyectos'];?></td>
    <td><?php echo $registroEmpresas['direccion'];?></td>
    <td><?php echo $registroEmpresas['activo'];?></td>
    <td><?php echo $registroEmpresas['descripcion'];?></td>

    <td><a href="../Vista/IUActualizarEmpresa.php?idEmpresa=<?php  echo $registroEmpresas['idEmpresa']; ?>">Actualizar</a>
    <td><a href="../Logica/LNEliminarEmpresa.php?idEmpresa=<?php  echo $registroEmpresas['idEmpresa']; ?>">Eliminar</a>


  </tr>
 
  <?php } ?>
 <h3 title = "Volver al inicio"> <a href="./index.php">Inicio</a></h3>