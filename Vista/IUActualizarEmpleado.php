<?php

	require_once ("../Logica/LNListaEmpleado.php");
	$objLNListaEmpleado = new LNListaEmpleado();
	$datosEmpleado = $objLNListaEmpleado->datosEmpleado($_REQUEST['idEmpleado']);
	print_r($datosEmpleado)
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body>

	<h1>Actualizar Empleado</h1>

	<form action="../Logica/LNActualizarEmpleado.php" method="post" name="   ">
	<h3 title = "Volver al inicio"> <a href="../index.html">Inicio</a></h3>
      
    <input type="hidden" name="idEmpleado" value="<?php echo $datosEmpleado['idEmpleado'] ?>">
    <input type="hidden" name="idRol" value="<?php echo $datosEmpleado['idRol'] ?>">
    <input type="hidden" name="ciEmpAntiguo" value="<?php echo $datosEmpleado['ci'] ?>">
	<table border=1px>
        <tr>
			<td>idRol</td>
			<td>
				<input type="text" name="idRol" id="idRol" placeholder="solo numeros y caracteres y acepte el caracter 345-AB o 45-abc" 
                 pattern="[0-9-Aa-Zz]+" value="<?php echo $datosEmpleado['idRol'] ?>"> 
			</td>
        </tr>

		<tr>
			<td>CI</td>
			<td>
				<input type="text" name="ci" id="ci" placeholder="solo numeros y caracteres y acepte el caracter 345-AB o 45-abc"  pattern="[0-9-Aa-Zz]+" value="<?php echo $datosEmpleado['ci'] ?>"> 
			</td>
        </tr>

		<tr>
			<td>Primer Nombre</td>
			<td>
				<input type="text" name="primerNombre" id="primerNombre" placeholder="solo caracteres" required pattern="[A-Za-z]+" value="<?php echo $datosEmpleado['primerNombre'] ?>"> 
			</td>
		</tr>

		<tr>
			<td>Segundo Nombre</td>
			<td>
				<input type="text" name="segundoNombre" id="segundoNombre" placeholder="solo caracteres" pattern="[A-Za-z]+"
				 value="<?php echo $datosEmpleado['segundoNombre'] ?>"> 
			</td>
		</tr>

		<tr>
			<td>Apellido Paterno </td>
			<td>
				<input type="text"  name ="apellidoPaterno" id="apellidoPaterno" placeholder="solo caracteres" required pattern="[A-Za-z]+" value="<?php echo $datosEmpleado['apellidoPaterno'] ?>"> 
			</td>
		</tr>

		<tr>
			<td>Apelliso Materno</td>
			<td>
				<input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="solo caracteres"  
				pattern="[A-Za-z]+" value="<?php echo $datosEmpleado['apellidoMaterno'] ?>"> 
			</td>
		</tr>

        <tr>
			<td>Telefono</td>
			<td>
				<input type="number" name="celular" id="celular" placeholder="solo numeros" required pattern="[0-9]{8}" 
				value="<?php echo $datosEmpleado['celular'] ?>"> 
			</td>
		</tr>

		<tr>
			<td>Usuario</td>
			<td>
			 
				<input type="text" name="usuario"  id="usuario" placeholder="🔑Usuario" 
				value="<?php echo $datosEmpleado['usuario'] ?>">
			</td>
		</tr>
		<tr>
			<td>contrasenia</td>
			<td>
				<input type="password" name="contrasenia" id="contrasenia" placeholder="🔐Contraseña"
				value="<?php echo $datosEmpleado['contrasenia'] ?>">
			</td>
		</tr>


		 <tr>
			<td>Fecha Ingreso</td>
			<td>
				<input type="date" name="fechaIngreso" id="fechaIngreso"
				value="<?php echo $datosEmpleado['fechaIngreso'] ?>" required>
			</td>
		</tr>
        <tr>
            <td>Fecha Actualizacion</td>
            <td>
                <input type="date" name="fechaActualizacion id="fechaActualizacion"
                       value="<?php echo $datosEmpleado['fechaActualizacion'] ?>" required>
            </td>
        </tr>
        <tr>
            <td>Fecha Retiro</td>
            <td>
                <input type="date" name="fechaRetiro" id="fechaRetiro"
                       value="<?php echo $datosEmpleado['fechaRetiro'] ?>" required>
            </td>
        </tr>

        <tr>
            <td>imagenCiAnverso</td>
            <td><input type="text" name="imagenCiAnverso" id="imagenCiAnverso" placeholder="imagenCiAnverso" required pattern="A-Za-z]+"
                       value="<?php echo $datosEmpleado['imagenCiAnverso'] ?>"> </td>
        </tr>
        <tr>
            <td>imagenCiReverso</td>
            <td><input type="text" name="imagenCiReverso" id="imagenCiReverso" placeholder=" imagenCiReverso" required pattern="A-Za-z]+"
                       value="<?php echo $datosEmpleado['imagenCiReverso'] ?>"> </td>
        </tr>

		<tr>
			<td>Activo</td>

			<td>
				<?php if($datosEmpleado['estado'] == 1) {?>
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
        <button><a href="../Vista/IUListaEmpleados.php">Cancelar</button><br>
    </tr>

</form>
</body>
</html>