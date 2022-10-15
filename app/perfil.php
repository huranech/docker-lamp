<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
        <h1>Modifica los datos que quieras de tu perfil</h1>
            <form action="procesar-perfil.php" method="post">
                <label for="nombre"> <b>Cambiar nombre y apellidos:</b>
                <input type="text" name="nombre" value="<?php echo($_SESSION['nombre']);?>">
                <br>
                <label for="usuario"> <b>Cambiar usuario:</b>
                <input type="text" name="usuario" value="<?php echo($_SESSION['usuario']);?>">
                <br>
                <label for="contrasena"> <b>Cambiar contraseña:</b>
                <input type="password" name="contrasena" value="<?php echo($_SESSION['contrasena']);?>">
                <br>
                <label for="dni"> <b>Cambiar DNI:</b>
                <input type="text" name="dni" value="<?php echo($_SESSION['DNI']);?>">
                <br>
                <label for="telefono"> <b>Cambiar teléfono:</b>
                <input type="tel" name="telefono" value="<?php echo($_SESSION['telefono']);?>">
                <br>
                <label for="fechanato"> <b>Cambiar fecha de nacimiento:</b>
                <input type="text" name="fechanato" value="<?php echo($_SESSION['fechanato']);?>">
                <br>
                <label for="email"> <b>Cambiar email:</b>
                <input type="text" name="email" value="<?php echo($_SESSION['email']);?>">
                <br>
                <input type="submit" name="submit" value="Cambiar datos">
            </form>

            <form action="procesar-perfil.php" method="post">
                <input type="submit" name="eliminar" value="Eliminar cuenta">
            </form>
        </div>
    </div>
</body>
</html>