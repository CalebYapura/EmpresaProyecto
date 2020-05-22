<?php
require_once("../Logica/LNListaEmpleado.php");
$objLNListaEmpleado = new LNListaEmpleado();
$listaEmpleados = $objLNListaEmpleado->listaDeEmpleados();

?>

<!DOCTYPE html>
<html>
<head>
<title>Lista de Trabajadores</title>
</head>
<body style="background-color:##C8F7F1;">
<h1><font color="black">Lista de trabajadores</font></h1>
<h3 title = "Volver al inicio"> <a href="../index.php">Inicio</a></h3>
<h1><font color="black"></font></h1>

<table border = 2>
  <tr>
    
    <th>CI</th>
    <th>Nombre Completo</th>
    <th>cantidad proyectos</th>
    <th>Total Horas Trabajadas</th>
    <th>Actualizar</th>
    <th>Eliminar</th>
  </tr>
  <?php
  print_r($listaEmpleados);
     foreach($listaEmpleados as $registroEmpleado){
  ?>
  <tr>
    <td><?php echo $registroEmpleado['ci'];?></td>
    <td><?php echo $registroEmpleado['nombreEmpleado'];?></td>
    <td><?php echo $registroEmpleado['cantidadproyectos'];?></td>
    <td><?php echo $registroEmpleado['HorasTrabajadas'];?></td>

      <td><a href="../Vista/IUActualizarEmpleado.php?idEmpleado=<?php  echo $registroEmpleado['idEmpleado']; ?>">Actualizar</a></td>
      <td><a href="../Logica/LNEliminarEmpleado.php?idEmpleado=<?php  echo $registroEmpleado['idEmpleado']; ?>">Eliminar</a></td>

  </tr>



  <?php } ?>

</body>
</html>

