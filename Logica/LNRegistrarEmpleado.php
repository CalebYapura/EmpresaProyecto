<?php
require_once("../Modelo/DBEmpleado.php");
$objetoEmpleado = new DBEmpleado();
//idEmpleado,idRol,ci,primerNombre,segundoNombre,apellidoPaterno,apellidoMaterno,celular,usuario,contrasenia,
//fechaIngreso,fechaActualizacion,fechaRetiro,imagenCiAnverso,imagenCiReverso,estado

echo "idEmpleado --> ".$_REQUEST['idEmpleado']."<br>";
echo "idRol --> ".$_REQUEST['idRol']."<br>";
echo "ci --> ".$_REQUEST['ci']."<br>";
echo "primerNombre --> ".$_REQUEST['primerNombre']."<br>";
echo "segundoNombre --> ".$_REQUEST['segundoNombre']."<br>";
echo "apellidoPaterno --> ".$_REQUEST['apellidoPaterno']."<br>";
echo "apellidoMaterno --> ".$_REQUEST['apellidoMaterno']."<br>";
echo "celular --> ".$_REQUEST['celular']."<br>";
echo "usuario --> ".$_REQUEST['usuario']."<br>";
echo "contrasenia --> ".$_REQUEST['contrasenia']."<br>";
echo "fechaIngreso --> ".$_REQUEST['fechaIngreso']."<br>";
echo "fechaActualizacion --> ".$_REQUEST['fechaActualizacion']."<br>";
echo "fechaRetiro --> ".$_REQUEST['fechaRetiro']."<br>";
echo "imagenCiAnverso --> ".$_REQUEST['imagenCiAnverso']."<br>";
echo "imagenCiReverso --> ".$_REQUEST['imagenCiReverso']."<br>";
echo "activo --> ".$_REQUEST['activo']."<br>";

if($_REQUEST['activo'] == 'S'){
    $activo = 1;
}else{
    $activo = 0;
}
$exitoRegistro = $objetoEmpleado->registrarEmpleado($_REQUEST['idEmpleado'],
                                                    $_REQUEST['idRol'],
                                                    $_REQUEST['ci'],
                                                    $_REQUEST['primerNombre'],
                                                    $_REQUEST['segundoNombre'],
                                                    $_REQUEST['apellidoPaterno'],
                                                    $_REQUEST['apellidoMaterno'],
                                                    $_REQUEST['celular'],
                                                    $_REQUEST['usuario'],
                                                    $_REQUEST['contrasenia'],
                                                    $_REQUEST['fechaIngreso'],
                                                    $_REQUEST['fechaActualizacion'],
                                                    $_REQUEST['fechaRetiro'],
                                                    $_REQUEST['imagenCiAnverso'],
                                                    $_REQUEST['imagenCiReverso'],
                                                    $activo
);
if($exitoRegistro==1){
    echo "los datos del empleado se registraron correctamente";
}else{
    echo "Error al registrar los datos del empleado";
}


?>
<br>
<h3 title = " Lista Empleados"> <a href="../Vista/IUListaEmpleados.php">Lista de Empleados</a></h3>
