<?php
session_start();
header("Location: ../index.php");
require "csrf.php";
if(CSRF::validate($_POST['token'])){
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    require_once 'index.php';
    require_once 'funciones.php';

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? limit 1;");
    $stmt->bind_param('s', $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();
    

    if($resultado)
    {
        if($resultado && mysqli_num_rows($resultado) > 0)
        {
            $user_data = $resultado->fetch_assoc();

            if(password_verify($contrasena, $user_data['contrasena']))
            {
                $_SESSION['id_usuario'] = $user_data['id'];
                $_SESSION['nombre'] = $user_data['nombre'];
                $_SESSION['usuario'] = $user_data['usuario'];
                $_SESSION['contrasena'] = $contrasena;
                $_SESSION['DNI'] = $user_data['DNI'];
                $_SESSION['telefono'] = $user_data['telefono'];
                $_SESSION['fechanato'] = $user_data['fechanato'];
                $_SESSION['email'] = $user_data['email'];
            }
        }
    }
}else{
    exit("Fallo en la validacion del token CSRF");
}
