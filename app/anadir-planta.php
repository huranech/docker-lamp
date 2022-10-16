<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
          <li><a href="login.html">Iniciar sesión</a></li>
          <li><a href="registrarse.html">Registrarse</a></li>
          <li><a href="perfil.php">Perfil</a></li>
        </ul>
    </nav>
    <div>
        <h1>Añade una planta</h1>
        <form action="procesar-modcatalogo.php" method="post">
            <h3>Añade una planta</h3>

            <input type="text" name="nomcomun" placeholder="Nombre común" required>

            <input type="text" name="nomcient" placeholder="Nombre científico" required>

            <input type="text" name="origen" placeholder="Origen" required>

            <input type="text" name="descripcion" placeholder="Descripción">

            <input type="text" name="temporada" placeholder="Temporada">

            <input type="submit" name="anadir" value="Añadir Planta">
    </form>
    </div>
</body>
</html>