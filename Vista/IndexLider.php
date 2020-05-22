<?php
require_once("../Logica/LNListaDepartamento.php");
$objLNListaDepartamento = new LNListaDepartamento();    ///  idempleado jefe
$empleado = $objLNListaDepartamento->listaDeEmpleadosMasDepartamento('2');

?>

<!DOCTYPE html>
<html>

<head>
<title>Bien venido lider</title>

</head>
<body>
<h3 title="Volver al inicio"> <a href="IURegistrarDepartamento.php">Inicio Registrar</a></h3>

    <a href="./IUListaEmpleadosDepartamento.php?idEmpleado=<?php echo $empleado['idEmpleado']; ?>&idDepartamento=<?php echo $empleado['idDepartamento']; ?>">lista de empleados  </a>

    <a href="./UIDepartamento.php">Ver Proyecto</a>
</body>
</html>