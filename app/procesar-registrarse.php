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


 $sql = "SELECT * FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios);";

 $resultado = mysqli_query($conn, $sql);
 if($resultado)
 {
    $array = mysqli_fetch_assoc($resultado);
    $id = $array['id'] + 1;
    print("$id");
 }
 else{
    $id = 1;
    print("$id");
 }

 $sql = "INSERT INTO usuarios(id, nombre, usuario, contrasena, DNI, telefono, fechanato, email) VALUES ('$id', '$nombre', '$usuario', '$contrasena', '$dni', '$telefono', '$fechanato', '$email');";
 mysqli_query($conn, $sql);

}