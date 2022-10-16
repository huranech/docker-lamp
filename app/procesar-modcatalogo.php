<?php
header("Location: ../index.php");
session_start();
if(isset($_POST["anadir"])) {
  
 $nomcomun = $_POST["nomcomun"];
 $nomcient = $_POST["nomcient"];
 $origen = $_POST["origen"];
 $descripcion = $_POST["descripcion"];
 $temporada = $_POST["temporada"];

 require_once 'index.php';
 require_once 'funciones.php';

 //creamos el ID para la planta que queremos añadir
 $sql = "SELECT * FROM plantas WHERE id = (SELECT MAX(id) FROM plantas);";

 $resultado = mysqli_query($conn, $sql);
 if($resultado)
 {
    $array = mysqli_fetch_assoc($resultado);
    $id = $array['id'] + 1; 
 }
 else{
    $id = 1;
 }

 //insertamos la planta con los nuevos datos
 $sql = "INSERT INTO plantas(id, nomcomun, nomcient, origen, descripcion, temporada) VALUES ('$id', '$nomcomun', '$nomcient', '$origen', '$descripcion', '$temporada');";
 mysqli_query($conn, $sql);

}

//código para permitir la modificación individual de cada planta
if(isset($_POST["modificar"])) {
  
    $id = $_SESSION['id_planta'];
    $nomcomun = $_POST["nomcomun"];
    $nomcient = $_POST["nomcient"];
    $origen = $_POST["origen"];
    $descripcion = $_POST["descripcion"];
    $temporada = $_POST["temporada"];
   
    require_once 'index.php';
    require_once 'funciones.php';
   
    $sql = "UPDATE plantas SET nomcomun = '$nomcomun', nomcient = '$nomcient', origen = '$origen', descripcion = '$descripcion', temporada = '$temporada' WHERE id = '$id';";
    mysqli_query($conn, $sql);
   
   }