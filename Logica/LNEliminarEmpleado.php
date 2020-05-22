<?php
    require_once("../Modelo/DBEmpleado.php");

    $objetoEmpleado = new DBEmpleado();

    $exitoEliminarEmpleado = $objetoEmpleado->EliminarEmpleado($_REQUEST['idEmpleado']);
    
    if($exitoEliminarEmpleado==1){
        echo "los datos del empleado se eliminaron correctamente"; 
    }else{
        echo "Error al eliminar datos del empleado";
    }
?>
<br>
<h3 title = " Lista Empleados"> <a href="../Vista/IUListaEmpleados.php">Lista de Empleados</a></h3>