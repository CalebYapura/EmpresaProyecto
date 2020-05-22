<?php
require_once("../Modelo/DBPProyecto.php");

$objetoProyecto = new DBProyecto();

$exitoEliminarProyecto = $objetoProyecto->EliminarProyecto($_REQUEST['idProyecto']);

if($exitoEliminarProyecto==1){
    echo "los datos del Proyecto se eliminaron correctamente";
}else{
    echo "Error al eliminar datos del proyecto";
}
?>
<br>
<h3 title = " Lista Proyecto"> <a href="../Vista/IUListaProyectos.php">Lista de Proyectos</a></h3>