<?php

require_once("../Modelo/DBEmpresa.php");

$objetoDBEmpresa = new DBEmpresa();


$activo = ($_REQUEST['activo'] == 'S') ? 1 : 0;


if ($_REQUEST['nitEmprAntiguo'] == $_REQUEST['nit']) {


    $target_path = "../img/";

    $target_path = $target_path . basename($_FILES['logo']['name']);

    if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_path)) {
        $exitoActualizar = $objetoDBEmpresa->ActualizarEmpresa(
            $_REQUEST['idEmpresa'],
            $_REQUEST['nit'],
            $_REQUEST['nombre'],
            $_REQUEST['direccion'],
            $_FILES['logo']['name'],
            $_REQUEST['telefono'],
            $_REQUEST['descripcion'],
            $activo
        );
    }
    if ($exitoActualizar == 1) {
        echo "Los datos del empresa se actualizaron correctamente";
    } else {
        echo "Error en la actualizacion de datos del empresa";
    }
} else {
    $validacionNit = $objetoDBEmpresa->ValidarNit($_REQUEST['nit']);

    if ($validacionNit == 1) {
        echo "el nit que usted desea registrar ya existe";
    } else {

        $target_path = "../img/";

        $target_path = $target_path . basename($_FILES['logo']['name']);

        if (move_uploaded_file($_FILES['logo']['tmp_name'], $target_path)) {
            $exitoActualizar = $objetoDBEmpresa->ActualizarEmpresa(
                $_REQUEST['idEmpresa'],
                $_REQUEST['nit'],
                $_REQUEST['nombre'],
                $_REQUEST['direccion'],
                $_FILES['logo']['name'],
                $_REQUEST['telefono'],
                $_REQUEST['descripcion'],
                $activo
            );
        }

        if ($exitoActualizar == 1) {
            echo "Los datos de la empresa se actualizaron correctamente";
        } else {
            echo "Error en la actualizacion de datos de la empresa";
        }
    }
}


?>
<br>
<h3 title="Volver Lista Empresas"><a href="../Vista/IUListaEmpresas.php">Lista de Empresas</a></h3>
