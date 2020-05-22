<?php
 session_start();
    require_once("../Modelo/DBEmpleado.php");
    //require_once("../Modelo/Rol.php");

    $objetoUsuario = new DBEmpleado();

    print_r($_REQUEST);
    //$objRol = new DBRol();


    $existeDatosUsuario = $objetoUsuario->verificarUsuarioContrasenia(
        $_REQUEST['usuario'],
        $_REQUEST['contrasenia']
    );


       print_r($existeDatosUsuario);
    if ($existeDatosUsuario && $existeDatosUsuario['activo']==1) {

        if($existeDatosUsuario['idRol']==1){ //admin
            header("Location: ../Vista/indexAdmin.php");

        }else if($existeDatosUsuario['idRol']==2){ // jefe
            header("Location: ../Vista/indexJefe.php");

        }else if($existeDatosUsuario['idRol']==3){ //  empleado
            header("Location: ../Vista/indexEmpleado.php");
        }
    } else {
        echo 'hable con el admin';
    }









