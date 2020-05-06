<?php
    require_once("../Modelo/DBEmpresa.php");

    $objetoEmpresa = new DBEmpresa();

    $exitoEliminarEmpresa = $objetoEmpresa->EliminarEmpresa($_REQUEST['idEmpresa']);
    
    if($exitoEliminarEmpresa==1){
        echo "los datos del empresa se eliminaron correctamente"; 
    }else{
        echo "Error al eliminar datos dela empresa";
    }
?>
<br>
<h3 title = " Lista Empresa"> <a href="../Vista/IUListaEmpresas.php">Lista de Empresa</a></h3>