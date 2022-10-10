<?php

//conectar con la base de datos
$hostname = "db";
$username = "admin";
$password = "test";
$db = "database";

$conn = mysqli_connect($hostname,$username,$password,$db);
if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO usuarios (id, nombre, contraseña, DNI, telefono, fechaNacimiento, email) 
        VALUES(?, ?, ?, ?, ?, ?, ?)"

$stmt = $db->prepare($sql);
$resultado = $stmt->execute([$_POST['nombre'],$_POST['contraseña'],$_POST['dni'],$_POST['teléfono'],$_POST['fecha de nacimiento'],$_POST['email']]);
if($resultado)
{
    echo 'se ha registrado correctamente';
}
else{
    echo 'no se ha podido guardar';
}