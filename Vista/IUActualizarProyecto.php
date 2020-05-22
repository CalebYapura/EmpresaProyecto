<?php

require_once ("../Logica/LNListaProyecto.php");
$objLNListaProyecto = new LNListaProyecto();
$datosProyecto = $objLNListaProyecto->datosProyecto($_REQUEST['idProyecto']);


$objEmpresa = new DBEmpresa();
$listaEmpresasActivos =  $objEmpresa->listaDeEmpresasActivos();

?>

<h1>Formulario</h1>

idProyecto; nombre; fechaInicio; fechaFin; fechaRealCulminacion; descripcion;
<form action="../Logica/LNRegistrarProyecto.php" method="post" name="" enctype="multipart/form-data">

    <input type="hidden" name="idEmpresa" value="<?php echo $datosProyecto['idProyecto'] ?>">

    <table border="3">

        <tr>
            <td>idProyecto</td>
            <td><input type="text" name="idProyecto" id="idProyecto" placeholder="ingrese el id" required
                       pattern="[0-9-Aa-Zz]+" title="solo numeros y caracteres "
                       value="<?php echo $datosProyecto['idProyecto'] ?>"> </td>
        </tr>
        <tr>
            <td>Seleccione Empresa</td>
            <td>
                <select name="idEmpresa">
                    <?php foreach ($listaEmpresasActivos as $empresa) {
                        ?>
                        <option value="<?php echo $empresa['idEmpresa'] ?>"><?php echo $empresa['nombre'] ?></option>

                    <?php } ?>
                </select>

            </td>
        </tr>
        <tr>
            <td>NombreProyecto</td>
            <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre Proyecto" required
                       pattern="[A-Za-z]+" title="solo caracteres" value="<?php echo $datosProyecto['nombre'] ?>"></td>
        </tr>
        <tr>
            <td>fechaInicio</td>
            <td><input type="date" name="fechaInicio" id="fechaInicio" placeholder="fechas" required
                       pattern="[0-9]{8}" value="<?php echo $datosProyecto['fechaInicio'] ?>"> </td>
        </tr>
        <tr>
            <td>fechaFin</td>
            <td><input type="date" name="fechaFin" id="fechaFin" placeholder="fechas" required
                       pattern="[0-9]{8}" value="<?php echo $datosProyecto['fechaFin'] ?>"> </td>
        </tr>

        <tr>
            <td>fechaRealCulminacion</td>
            <td><input type="date" name="fechaRealCulminacion" id="fechaRealCulminacion" placeholder="fechas" required
                       pattern="[0-9]{8}" value="<?php echo $datosProyecto['telefono'] ?>"> </td>
        </tr>

        <tr>
            <td>Descripcion</td>
            <td><input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" required
                       pattern="[A-Za-z]+" value="<?php echo $datosProyecto['descripcion'] ?>"></td>
        </tr>
        <tr>
        <tr>
            <td>Activo</td>

            <td>
                <?php if($datosProyecto['activo'] == 1) {?>
                    <input type="radio"  name="estado" value="S" checked >Si
                    <input type="radio"  name="estado" value="N">No
                <?php }else{ ?>
                    <input type="radio"  name="estado" value="S">Si
                    <input type="radio"  name="estado" value="N" checked>No
                <?php } ?>
            </td>
        </tr>

    </table>
    <tr>
        <td><button>Actualizar</button></td>
        <button><a href="../Vista/IUListaProyectos.php">Cancelar</button><br>
    </tr>

</form>
<h3 title="Volver al inicio"><a href="./IUActualizarProyecto.php">Atras</a></h3>
