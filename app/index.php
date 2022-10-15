<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de plantas</title>
  <link rel="stylesheet" type="text/css" href="/Escritorio/Proyecto_lgssi/docker-lamp/app/estilos.css">
  
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
      <li><a href="catalogoplantas.php">Catálogo de plantas</a></li>
      <li><a href="modificarcatalogo.php">Modificar catálogo</a></li>
      <li><a href="login.html">Iniciar sesión</a></li>
      <li><a href="registrarse.html">Registrarse</a></li>
      <li><a href="perfil.php">Perfil</a></li>
    </ul>
  </nav>
  <?php
    
    // phpinfo();
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }



  ?>
</body>
</html>


