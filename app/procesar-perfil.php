<?php

session_start();

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

 $id = random_num(20);
 $sql = "UPDATE TABLE usuarios SET id = '$id', nombre = '$nombre', usuario = '$usuario', contrasena = '$contrasena', DNI = '$dni', telefono = '$telefono', fechanato = '$fechanato', email = '$email' WHERE dni = '$dni';";
 mysqli_query($conn, $sql);

}