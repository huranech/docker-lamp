<?php session_start();
header("X-Frame-Options: SAMEORIGIN");
header("X-Content-Type-Options: nosniff");
require "./csrf.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
  http-equiv="Content-Security-Policy"
  content="style-src 'self';" />
    <title>Editar</title>
</head>
<body>
    <?php
    require_once('conexion.php');
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $stmt = $conn->prepare("SELECT * FROM plantas WHERE id = ?;");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if($resultado)
        {
            if($resultado && mysqli_num_rows($resultado) > 0)
            {
                $datos_planta = $resultado->fetch_assoc();
                $_SESSION['id_planta'] = $id;
            }
        }

    }
    ?>
<h3>Modifica una planta<h3>
    
        <form action="procesar-modcatalogo.php" method="post">
        <input name="csrf" type="hidden" value="<?php echo $_SESSION['csrf']; ?>">

        <input type="text" name="nomcomun" value= "<?php echo $datos_planta['nomcomun']; ?>" required>

        <input type="text" name="nomcient" value= "<?php echo $datos_planta['nomcient']; ?>" required>

        <input type="text" name="origen" value= "<?php echo $datos_planta['origen']; ?>" required>

        <input type="text" name="descripcion" value= "<?php echo $datos_planta['descripcion']; ?>">

        <input type="text" name="temporada" value= "<?php echo $datos_planta['temporada']; ?>">

        <input type="submit" name="modificar" value="Modificar Planta">
        </form>
</body>
</html>