<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo plantas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <div class="container">
        <br>
        <h1>Catalogo de plantas</h1>
        <br>
        <div class="container">
        <table class="table">
            <thead>
                <tr>
                <th scope="col" style="color: green;">Nombre común</th>
                <th scope="col" style="color: green;">Nombre científico</th>
                <th scope="col" style="color: green;">Origen</th>
                <th scope="col" style="color: green;">Descripción</th>
                <th scope="col" style="color: green;">Temporada</th>
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
                            <th scope="row"><?php echo $row['nomcient']; ?></th>
                            <th scope="row"><?php echo $row['origen']; ?></th>
                            <th scope="row"><?php echo $row['descripcion']; ?></th>
                            <th scope="row"><?php echo $row['temporada']; ?></th>
                        </tr>

                  <?php  } ?>
            </tbody>
        </table>
        </div>
    </div>

    </div>
</body>
</html>
