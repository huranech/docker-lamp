<?php

session_start();

if(isset($_POST["submit"])) {
  
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
   
    require_once 'index.php';
    require_once 'funciones.php';

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' limit 1";;

    $resultado = mysqli_query($conn, $sql);
    if($resultado)
    {
        if($resultado && mysqli_num_rows($resultado) > 0)
        {
            $user_data = mysqli_fetch_assoc($resultado);

            if($user_data['contrasena'] === $contrasena)
            {
                $_SESSION['id_usuario'] = $user_data['id'];
                $_SESSION['nombre'] = $user_data['nombre'];
            }
        }
    }
}