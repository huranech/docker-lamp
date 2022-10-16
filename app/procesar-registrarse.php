<?php

if(isset($_POST["submit"])) {
  
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $fechanato = $_POST["fechanato"];
    $email = $_POST["email"];

    require_once 'index.php';
    require_once 'funciones.php';

    if(validar_tel($telefono) && validar_texto($nombre) && validar_fecha($fechanato) && validar_dni($dni)){

        $sql = "SELECT * FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios);";

        $resultado = mysqli_query($conn, $sql);
        if($resultado)
        {
            $array = mysqli_fetch_assoc($resultado);
            $id = $array['id'] + 1;
        }
        else{
            $id = 1;
        }
    
        $sql = "INSERT INTO usuarios(id, nombre, usuario, contrasena, DNI, telefono, fechanato, email) VALUES ('$id', '$nombre', '$usuario', '$contrasena', '$dni', '$telefono', '$fechanato', '$email');";
        mysqli_query($conn, $sql);

        $_SESSION['id_usuario'] = $id;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contrasena'] = $contrasena;
        $_SESSION['DNI'] = $dni;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['fechanato'] = $fechanato;
        $_SESSION['email'] = $email;
    }
}

header('Location: index.php');