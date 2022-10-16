<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo plantas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    
    <div class="container">
        <br>
        <h1>Catalogo de plantas</h1>
        <br>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col" style="color: green;">Nombre común</th>
                <th scope="col" style="color: green;">Origen</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include "conexion.php";
                    $sql = mysqli_query($conn, "SELECT * FROM plantas")
                    or die (mysqli_error($conn));

                    while ($row = $sql->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $row['nomcomun']; ?></th>
                            <th scope="row"><?php echo $row['origen']; ?></th>
                            <?php echo "<th> <div class='btn-group'>
                                <a class='btn btn-secondary' href='./editar.php?id=".$row['id']."'>Editar</a>
                                <a onclick='confirmar()' class='btn btn-danger' href='./borrar.php?id= ".$row['id']."'>Borrar</a>
                            </div>"?>
                        </tr>

                  <?php  } ?>
            </tbody>
        </table>
        </div>
    </div>

    </div>
    <script>
        //Pregunta si realmente quiere borrar la planta
        function confirmar()
        {
            var resultado = confirm('¿Estás seguro de que quieres borrar la planta?');
            if(resultado == false)
            {
                event.preventDefault();
            }
        }
    </script>
</body>
</html>
