<?php
    require_once("../Modelo/DBEmpresa.php");
    $objetoEmpresa = new DBEmpresa();
   
  
    echo "idEmpresa--> ".$_REQUEST['idEmpresa']."<br>";
    echo "nit --> ".$_REQUEST['nit']."<br>";
    echo "nombre --> ".$_REQUEST['nombre']."<br>";
    echo "direccion --> ".$_REQUEST['direccion']."<br>";
    echo "proyecto --> ".$_REQUEST['cantidadProyectos']."<br>";
//    echo "logo --> ".$_REQUEST['logo']."<br>";
    echo "telefono --> ".$_REQUEST['telefono']."<br>";
    echo "descripcion --> ".$_REQUEST['descripcion']."<br>";
    echo "activo --> ".$_REQUEST['activo']."<br>";

    if($_REQUEST['activo'] == 'S'){
        $activo = 1;
    }else{
        $activo = 0;
    }
    //registrra imagen logo
$target_path = "../img/";

$target_path = $target_path . basename( $_FILES['logo']['name']);

//echo $target_path.'<br>' ;
//echo $_FILES['logo']['name'].'<br>' ;

if(move_uploaded_file($_FILES['logo']['tmp_name'], $target_path)){


    $exitoRegistro = $objetoEmpresa->registrarEmpresa($_REQUEST['idEmpresa'],
        $_REQUEST['nit'],
        $_REQUEST['nombre'],
        $_REQUEST['direccion'],
        $_REQUEST['cantidadProyectos'],
        $_FILES['logo']['name'],
        $_REQUEST['telefono'],
        $_REQUEST['descripcion'],
        $activo
    );
}





    if($exitoRegistro==1){
        echo "los datos de de la empresa se registraron correctamente";
    }else{
        echo "Error al registrar, la idEmpresa que ingreso ya existe  ";
    }
    
    
?>
<br>
<h3 title = " Lista Empresas"> <a href="../Vista/IUListaEmpresas.php">Lista de Empresas</a></h3>
