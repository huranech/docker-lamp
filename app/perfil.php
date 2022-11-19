<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
  http-equiv="Content-Security-Policy"
  content="style-src 'self';" />
    <title>Document</title>

    <style>
        nav ul{list-style-type:none;
        text-align:center;}
    
        nav ul li{
        display: inline;
        text-align: center;
        margin: 0 10px 0 0;}
    
        nav ul li a{
        padding: 2px 7px 2px 7px;
        color: #666;
        background-color: #eeeeee;
        border: 1px solid #ccc;
        text-decoration: none;}
    
        nav ul li a:hover{
        background-color: #333333;
        color: #ffffff;} 
      </style>

</head>
<body>
    <nav id="navbar">
        <ul class="navlist">
          <li><a href="index.php">Inicio</a></li>
          <li><a href="catalogoplantas.php">Catálogo de plantas</a></li>
          <li><a href="anadir-planta.php">Añadir planta</a></li>
          <li><a href="login.php">Iniciar sesión</a></li>
          <li><a href="registrarse.php">Registrarse</a></li>
          <li><a href="perfil.php">Perfil</a></li>
        </ul>
    </nav>
    
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
                <label for="dni"> <b>DNI (no se puede cambiar):</b>
                <label for="dni"> <b><?php echo($_SESSION['DNI']);?></b>
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
                <input type="submit" name="eliminar" value="eliminar usuario">
            </form>
        </div>
    </div>
</body>
</html>