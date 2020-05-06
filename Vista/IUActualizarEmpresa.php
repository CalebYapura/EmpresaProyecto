<?php

	require_once ("../Logica/LNListaEmpresa.php");
	$objLNListaEmpresa = new LNListaEmpresa();
	$datosEmpresa = $objLNListaEmpresa->datosEmpresa($_REQUEST['idEmpresa']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>FormularioActualizar</title>
</head>
<body>

	<h1>Actualizar Empresa</h1>

	<form action="../Logica/LNActualizarEmpresa.php" method="post" name="   ">
	<h3 title = "Volver al inicio"> <a href="../index.php">Inicio</a></h3>
      
    <input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa['idEmpresa'] ?>">
    <input type="hidden" name="nitEmprAntiguo" value="<?php echo $datosEmpresa['nit'] ?>">
	<table border=1px>

    <tr>
     <td>idEmpresa</td>
     <td><input type="text" name="idEmpresa" id="idEmpresa" placeholder="ingrese el id" required pattern="[0-9-Aa-Zz]+" title="solo numeros y caracteres " 
     value="<?php echo $datosEmpresa['idEmpresa'] ?>"> </td>
    </tr>
	
    <tr>
     <td>nit</td>
     <td><input type="text" name="nit" id="nit" placeholder="ingrese el nit" required pattern="[0-9-Aa-Zz]+" title="solo numeros y caracteres " 
     value="<?php echo $datosEmpresa['nit'] ?>"> </td>
    </tr>
   
	<tr>
	 <td>Nombre</td>
	 <td><input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre Empresa" required pattern="[A-Za-z]+" title="solo caracteres"
     value="<?php echo $datosEmpresa['nombre'] ?>"></td>
    </tr>
	
	 <tr>
	 <td>Direccion</td>
	 <td><input type="text" name="direccion" id="direccion" placeholder="Ingrese su Segundo direccion" required pattern="[A-Za-z]+" title="solo caracteres"
     value="<?php echo $datosEmpresa['direccion'] ?>"> </td>
    </tr>			
    <tr>
	 <td>Proyectos</td>
	 <td><input type="text" name="cantidadProyectos" id="cantidadProyectos" placeholder="Ingrese la cantidad de proyectos" required pattern="[0-9-A-Za-z]+" title="solo caracteres y numeros"
     value="<?php echo $datosEmpresa['cantidadProyectos'] ?>"> </td>
    </tr>
	<tr>
	 <td>Logo</td>
	 <td><input type="text"  name ="logo" id="logo" placeholder=" imagen del logo" required pattern="A-Za-z]+"
     value="<?php echo $datosEmpresa['logo'] ?>"> </td>
	</tr>				
	
    <tr>
	<td>Telefono</td>
	 <td><input type="number" name="telefono" id="telefono" placeholder="solo numeros" required pattern="[0-9]{8}" 
				value="<?php echo $datosEmpresa['telefono'] ?>"> </td>
	</tr>
		
    <tr>
	 <td>Descripcion</td>
	 <td><input type="text" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" required pattern="[A-Za-z]+"
     value="<?php echo $datosEmpresa['descripcion'] ?>"></td>
	</tr>		
		<tr>
			<td>Activo</td>
			<td>
				<?php if($datosEmpresa['activo'] == 1) {?>
				<input type="radio"  name="activo" value="S" checked >Si 
				<input type="radio"  name="activo" value="N">No
				<?php }else{ ?>
				<input type="radio"  name="activo" value="S">Si 
				<input type="radio"  name="activo" value="N" checked>No
				<?php } ?>
			</td>
        </tr>
       
    </table>

    <tr>
        <td><button>Actualizar</button></td>
        <button><a href="../Vista/IUListaEmpresas.php">Cancelar</button><br>
    </tr>

</form>
</body>
</html>