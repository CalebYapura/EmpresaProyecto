<?php
require_once("../Modelo/DBProyecto.php");
$objetoProyecto = new DBProyecto();

$validacionId = $objetoProyecto->ValidarIdProyecto($_REQUEST['idProyecto']);
if ($validacionId==1) {
    echo "El id ya Existe";
} else {
    $exitoActualizar =$objetoProyecto->ActualizarProyectos(
        $_REQUEST['idProyecto'],
        $_REQUEST['idEmpresa'],
        $_REQUEST['nombre'],
        $_REQUEST['fechaInicio'],
        $_REQUEST['fechaFin'],
        $_REQUEST['fechaRealCulminacion'],
        $_REQUEST['descripcion'],
        $activo
    );

    if ($exitoActualizar==1) {
        echo " Se actualizo Correctamente";
    } else {
        echo "No se pudo Actualizar los datos del proyecto";
    }
}
?>
<br>
<h3 title="VolverAListaProyectos"> <a href="../Vista/IUListaProyectos.php">Volver Lista Proyectos</a></h3>






