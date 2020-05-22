<?php
require_once("../Modelo/DBProyecto.php");
$objetoProyecto = new DBProyecto();

//idProyecto;idEmpresa; nombre; fechaInicio; fechaFin; fechaRealCulminacion; descripcion;activo
echo "idProyecto--> ".$_REQUEST['idProyecto']."<br>";
echo "idEmpresa--> ".$_REQUEST['idEmpresa']."<br>";
echo "nombre --> ".$_REQUEST['nombre']."<br>";
echo "fechaInicio --> ".$_REQUEST['fechaInicio']."<br>";
echo "fechaFin --> ".$_REQUEST['fechaFin']."<br>";
echo "fechaRealCulminacion--> ".$_REQUEST['fechaRealCulminacion']."<br>";
echo "descripcion --> ".$_REQUEST['descripcion']."<br>";
echo "activo --> ".$_REQUEST['activo']."<br>";

if($_REQUEST['activo'] == 'S'){
    $activo = 1;
}else{
    $activo = 0;
}
$exitoRegistro = $objetoProyecto->registrarProyecto($_REQUEST['idProyecto'],
                                                    $_REQUEST['idEmpresa'],
                                                    $_REQUEST['nombre'],
                                                    $_REQUEST['fechaInicio'],
                                                    $_REQUEST['fechaFin'],
                                                    $_REQUEST['fechaRealCulminacion'],
                                                    $_REQUEST['descripcion'],
                                                    $activo);
if($exitoRegistro==1){
    echo "los datos de del proyecto se registraron correctamente";
}else{
    echo "Error al registrar, el idProyecto que ingreso ya existe  ";
}


?>
<br>
<h3 title = " Lista Proyectos"> <a href="../Vista/IUListaProyectos.php">Lista de proyectos</a></h3>
