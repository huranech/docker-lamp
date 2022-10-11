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
            <form>
                <label for="nombre"> <b>Nombre y apellidos actuales:</b>
                <?php 
                $hostname = "db";
                $username = "admin";
                $password = "test";
                $db = "database";
            
                $conn = mysqli_connect($hostname,$username,$password,$db);
                if ($conn->connect_error) {
                  die("Database connection failed: " . $conn->connect_error);
                }
                
                require_once("procesar-login.php");
                require_once("funciones.php");
                check_login($conn);
                echo($_SESSION['id_usuario']);
                ?>
                <input type="text" name="nombre">
                <input type="submit" name="c_nombre" value="Cambiar Nombre y apellidos">
            </form>
        </div>
    </div>
</body>
</html>