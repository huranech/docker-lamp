<?php
header("Location: ../index.php");
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
        $contrasenaHash = password_hash($contrasena, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("UPDATE usuarios SET nombre = ?, usuario = ?, contrasena = ?, telefono = ?, fechanato = ?, email = ? WHERE DNI = ?;");
        $stmt->bind_param('sssssss', $nombre, $usuario, $contrasena, $telefono, $fechanato, $email, $dni);
        $stmt->execute();

        $_SESSION['nombre'] = $nombre;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['contrasena'] = $contrasena;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['fechanato'] = $fechanato;
        $_SESSION['email'] = $email;
    }
}
if(isset($_POST["eliminar"])) {
    $id = $_SESSION['id_usuario'];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?;");
    $stmt->bind_param('i', $id);
    $stmt->execute();

    session_unset();
}



