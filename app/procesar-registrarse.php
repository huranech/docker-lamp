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

 //if(dniNoValido($usuario) !== false) {
  //header("location: ../registrarse.html?error=invaliduid");
  //exit()
 //}

 crearUsuario($conn, $nombre, $usuario, $contrasena, $dni, $telefono, $fechanato, $email);

}