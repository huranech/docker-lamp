<?php

session_start();

require_once 'index.php';
require_once 'funciones.php';

if(isset($_POST["submit"])) {
    $nombre = $_POST["nombre"];
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $dni = $_SESSION['DNI'];
    $telefono = $_POST["telefono"];
    $fechanato = $_POST["fechanato"];
    $email = $_POST["email"];

    if(validar_tel($telefono) && validar_texto($nombre) && validar_fecha($fechanato))
    {
        $sql = "UPDATE usuarios SET nombre = '$nombre', usuario = '$usuario', contrasena = '$contrasena', telefono = '$telefono', fechanato = '$fechanato', email = '$email' WHERE DNI = '$dni';";
        mysqli_query($conn, $sql);
    }

}