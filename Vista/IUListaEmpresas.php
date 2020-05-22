<?php
require_once("../Logica/LNListaEmpresa.php");
require_once("../Modelo/DBEmpresa.php");

$objLNListaEmpresa = new LNListaEmpresa();
$listaEmpresas = $objLNListaEmpresa->listaDeEmpresas();

$objModeloEmpresa = new DBEmpresa();

if (isset($_REQUEST['nombre']) || isset($_REQUEST['nit']) || isset($_REQUEST['cproyecto'])|| isset($_REQUEST['estado'])) {
    $nombre = ($_REQUEST['nombre'])?$_REQUEST['nombre'] : '';
    $nit = ($_REQUEST['nit'])? $_REQUEST['nit']: '';

    $activo = $_REQUEST['estado'];

    // $consulta += "WHERE nombre LIKE '%{$nombre}%'";
    $listaEmpresas = $objModeloEmpresa->buscadorEmpresa($nombre,$nit,$activo,$_REQUEST['cproyecto']);

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Empresa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="background-color:#C8F7F1;">
<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>
                <font color="black">Lista de Empresa</font>
            </h1>
            <form action="" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="form-group col-md-6 form-inline">
                                <label>Nombre </label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group col-md-6 form-inline">
                                <label>Nit</label>
                                <input type="text" class="form-control" name="nit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="form-group col-md-6 form-inline">
                                <label>Cantidad de proyectos </label>
                                <input type="number" class="form-control" min="0" max="100" name="cproyecto" value="0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-row">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="estado" value="1">
                                <label class="form-check-label" for="inlineCheckbox2">Activos</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" name="estado" value="i"> <!--no agarra 0 en el input-->
                                <label class="form-check-label" for="inlineCheckbox2">inactivos</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="inlineCheckbox2" checked name="estado" value="" >
                                <label class="form-check-label" for="inlineCheckbox2">todos</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </form>
            <h3 align="center" title="Este es un Enlace a Listar Empresas"><a href="./IURegistrarEmpresa.php">Registrar</a>
            </h3>

            <table class="table">
                <thead>
                <tr>

                    <th>Logo</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>totalProyecto</th>
                    <th>Direccion</th>
                    <th>Estado</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($listaEmpresas as $registroEmpresas) {
                    ?>
                    <tr>
                        <td><img src="../img/<?php echo $registroEmpresas['logo']; ?>" height="80px">

                            </td>
                        <td><?php echo $registroEmpresas['nombre']; ?></td>
                        <td><?php echo $registroEmpresas['telefono']; ?></td>
                        <td><?php echo $registroEmpresas['totalProyecto']; ?></td>
                        <td><?php echo $registroEmpresas['direccion']; ?></td>
                        <td><?php echo $registroEmpresas['activo']; ?></td>


                        <td><a href="../Vista/IUActualizarEmpresa.php?idEmpresa=<?php echo $registroEmpresas['idEmpresa']; ?>">Actualizar</a>
                        <td><a href="../Logica/LNEliminarEmpresa.php?idEmpresa=<?php echo $registroEmpresas['idEmpresa']; ?>">Eliminar</a>


                    </tr>

                    <?php

                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--    <h3 title="Volver al inicio"><a href="./index.php">Inicio</a></h3>-->