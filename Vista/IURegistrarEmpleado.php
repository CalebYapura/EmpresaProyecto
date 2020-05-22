
<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>

<h1>Actualizar Empleado</h1>

<form action="../Logica/LNRegistrarEmpleado.php" method="post" name="   ">

    <table border=1px>

        <tr>
            <td>idEmpleado</td>
            <td><input type="" name="idEmpleado" id="idEmpresa" placeholder="ingrese el id" required
                       pattern="[0-9]+" title="solo numeros ">
            </td>
        </tr>
        <tr>
            <td>idRol</td>
            <td>
                <input type="" name="idRol" id="idRol" placeholder="solo numeros "
                       pattern="[0-9]+" title="" ">
            </td>

        </tr>

        <tr>
            <td>CI</td>
            <td><input type="" name="ci" id="ci" placeholder="ingrese su Ci" required pattern="[0-9+" title="solo numeros"> </td>
        </tr>

        <tr>
            <td>Primer Nombre</td>
            <td><input type="text" name="primerNombre" id="primerNombre" placeholder="Ingrese su Nombre" required pattern="[A-Za-z]+" title="solo caracteres"></td>
        </tr>

        <tr>
            <td>Segundo Nombre</td>
            <td><input type="text" name="segundoNombre" id="segundoNombre" placeholder="Ingrese su Segundo Nombre" required pattern="[A-Za-z]+" title="solo caracteres"> </td>
        </tr>

        <tr>
            <td>Apellido Paterno</td>
            <td><input type="text"  name ="apellidoPaterno" id="apellidoPaterno" placeholder=" Ingrese su Apellido Paterno" required pattern="A-Za-z]+"> </td>
        </tr>

        <tr>
            <td>Apelliso Materno</td>
            <td><input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Ingrese su Apellido Materno" required pattern="[A-Za-z]+"></td>
        </tr>

        <tr>
            <td>Celular</td>
            <td><input type="number" name="celular" id="celular" placeholder="celular" required pattern="[0-9]{8}"> </td>
        </tr>
        <tr>
            <td>Usuario</td>
            <td>

                <input type="text" name="usuario"  id="usuario" placeholder="Usuario"
                       required pattern="[A-Za-z]+">
            </td>
        </tr>
        <tr>
            <td>contrasenia</td>
            <td>
                <input type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña"
                       required pattern="[A-Za-z]+">
            </td>
        </tr>

        <tr>
            <td>Fecha Inicio</td>
            <td><input type="date" name="fechaInicio"></td>
        </tr>

        <tr>
            <td>Fecha Actualizacion</td>
            <td><input type="date" name="fechaActualizacion"></td>
        </tr>

        <tr>
            <td>Fecha Retiro</td>
            <td><input type="date" name="fechaRetiro"></td>
        </tr>

        <tr>
            <td>imagenCiAnverso</td>
            <td><input type="text" name="imagenCiAnverso"></td>
        </tr>

        <tr>
            <td>imagenCiReverso </td>
            <td><input type="text" name="imagenCiReverso"></td>
        </tr>


        <tr>
            <td>Activo</td>
            <td><input type="radio"  name="activo" value="Si"  >Si
                <input type="radio"  name="activo" value="No"checked>No </td>
        </tr>

    </table>
    <button>Registrar</button>
    <button>Cancelar</button>
    <tr>

        <button><a href="../Vista/IUListaEmpleados.php">Atras</button><br>
    </tr>

</form>
</body>
</html>