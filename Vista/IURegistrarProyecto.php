<!DOCTYPE html>
<html>

<head>
    <title>formulario</title>
    <link rel=StyleSheet type="text/css" href="estilo.css">
</head>

<body>

<h1>Formulario</h1>

idProyecto; nombre; fechaInicio; fechaFin; fechaRealCulminacion; descripcion;
<form action="../Logica/LNRegistrarProyecto.php" method="post" name="">

    <table border="3">

        <tr>
            <td>idProyecto</td>
            <td><input type="" name="idProyecto" id="idProyecto" placeholder="ingrese el id" required
                       pattern="[0-9]+" title="solo numeros ">
            </td>
        </tr>

        <tr>
            <td>NombreProyecto</td>
            <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del proyecto" required
                       pattern="[A-Za-z]+" title="solo caracteres"></td>
        </tr>

        <tr>
            <td>Fecha Inicio</td>
            <td><input type="date" name="fechaInicio"></td>
        </tr>

        <tr>
            <td>Fecha Fin</td>
            <td><input type="date" name="fechaFin"></td>
        </tr>

        <tr>
            <td>fechaRealCulminacion</td>
            <td><input type="date" name="fechaRealCulminacion"></td>
        </tr>

        <tr>
            <td>Descripcion</td>
            <td><input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" required
                       pattern="[A-Za-z]+"></td>
        </tr>

    </table>
    <button>Registrar</button>
    <button>Cancelar</button>



</form>
<h3 title="Volver al inicio"> <a href="./IUActualizarProyecto.php">Atras</a></h3>
</body>

</html>