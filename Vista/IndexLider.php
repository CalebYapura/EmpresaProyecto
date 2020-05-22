<?php
require_once("../Logica/LNListaProyecto.php");
$objLNListaDepartamento = new LNListaproyecto();    ///  idempleado jefe
$empleado = $objLNListaDepartamento->listaDeEmpleadosMasProyecto('2');

?>

<!DOCTYPE html>
<html>

<head>
<title>Bien venido lider</title>

</head>
<body>
<h3 title="Volver al inicio"> <a href="IURegistrarLider.php">Inicio Registrar</a></h3>

    <a href="./IUListaEmpleados.php?idEmpleado=<?php echo $empleado['idEmpleado']; ?>&idProyecto=<?php echo $empleado['idProyecto']; ?>">lista de empleados  </a>

    <a href="./UIDepartamento.php">Ver Proyecto</a>
</body>
</html>