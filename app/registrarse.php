<?php
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
  http-equiv="Content-Security-Policy"
  content="style-src 'self';" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css"> </link>
    <title>Registrarse</title>

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
        <form action="procesar-registrarse.php" method="post">
        <input name="token" type="hidden" value="<?php echo $_SESSION['token']; ?>">
            <section class="form-registro">
            <h2>Regístrate</h2>
            <input class="controls" type="text" name="nombre" placeholder="Nombre y Apellidos" required>

            <input class="controls" type="text" name="usuario" placeholder="Usuario" required>

            <input class="controls" type="password" name="contrasena" placeholder="Contraseña" required>

            <input class="controls" type="text" name="dni" placeholder="DNI" required>

            <input class="controls" type="tel" name="telefono" placeholder="Teléfono" required>

            <label class="controls" for="fecha de nacimiento"> <b>Fecha de nacimiento:</b>
            <input class="controls" type="text" name="fechanato" placeholder="2002-01-01" required>

            <input class="controls" type="email" name="email" placeholder="email" required>

            <input class="buttons" type="submit" name="submit" value="Registrarse">
        </section>
    </form>
</div>
</body>
</html>