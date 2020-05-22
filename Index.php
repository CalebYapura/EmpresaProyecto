<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Loguin</title>
    <link rel="stylesheet" href="./Vista/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
        <div class="col-6 ">
        <form action="Logica/LNAutentificacionUsuario.php" name="post">
        <div align="center">

                <H1>Sistema de Login</H1>
                <label for="username">Usuario:</label>
                <input type="text" name="usuario" class="form-control" placeholder="🔑Usuario">
                <label for="password">Contraseña:</label>
                <input type="password" name="contrasenia" class="form-control" placeholder="🔐Contraceña">
                <button type="submit" name="login" class="btn btn-success">Iniciar Sesion</button>

        </div>

    </form>
        </div>
        </div>
</div>
</body>

</html>