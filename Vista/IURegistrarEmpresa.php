<!DOCTYPE html>
<html>

<head>
    <title>formulario</title>
    <link rel=StyleSheet type="text/css" href="estilo.css">
</head>

<body>

    <h1>Formulario</h1>


    <form action="../Logica/LNRegistrarEmpresa.php" method="post" name="" enctype="multipart/form-data">

        <table border="3">
            <th></th>
            <th></th>

            <tr>
                <td>idEmpresa</td>
                <td><input type="" name="idEmpresa" id="idEmpresa" placeholder="ingrese el id" required
                        pattern="[0-9]+" title="solo numeros ">
                </td>
            </tr>

            <tr>
                <td>nit</td>
                <td><input type="text" name="nit" id="nit" placeholder="ingrese el nit" required pattern="[0-9-Aa-Zz]+"
                        title="solo numeros y caracteres y acepte el caracteres 345-AB o 45-abc"> </td>
            </tr>

            <tr>
                <td>Nombre</td>
                <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre Empresa" required
                        pattern="[A-Za-z]+" title="solo caracteres"></td>
            </tr>

            <tr>
                <td>Direccion</td>
                <td><input type="text" name="direccion" id="direccion" placeholder="Ingrese su Segundo direccion"
                        required pattern="[A-Za-z]+" title="solo caracteres"> </td>
            </tr>
            <tr>
                <td>Proyectos</td>
                <td><input type="text" name="cantidadProyectos" id="cantidadProyectos"
                        placeholder="Ingrese la cantidad de proyectos" required pattern="[0-9-A-Za-z]+"
                        title="solo caracteres y numeros"> </td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><input type="file" name="logo" id="logo">
                </td>
            </tr>


            <tr>
                <td>Telefono</td>
                <td><input type="number" name="telefono" id="telefono" placeholder="Telefono" required pattern="[0-9]">
                </td>
            </tr>


            <tr>
                <td>Descripcion</td>
                <td><input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" required
                        pattern="[A-Za-z]+"></td>
            </tr>

            <tr>
                <td>Activo</td>
                <td><input type="radio" name="activo" value="Si">Si
                    <input type="radio" name="activo" value="No" checked>No </td>
            </tr>

        </table>
        <button>Registrar</button>
        <button>Cancelar</button>



    </form>
    <h3 title="Volver al inicio"> <a href="./IUActualizarEmpresa.php">Atras</a></h3>
</body>

</html>