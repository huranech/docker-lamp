<?php

if (dni($_POST["DNI"])){
    die("El DNI introducido no es válido");
}

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

//funciones creadas
function dni($dni){
    $letra = substr($dni, -1);
    $numeros = substr($dni, 0, -1);
    $valido;
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
      $valido=true;
    }else{
      $valido=false;
    }
    return $valido;
  }