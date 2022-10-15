<?php

if(isset($_POST["anadir"])) {
  
 $nomcomun = $_POST["nomcomun"];
 $nomcient = $_POST["nomcient"];
 $origen = $_POST["origen"];
 $descripcion = $_POST["descripcion"];
 $temporada = $_POST["temporada"];

 require_once 'index.php';
 require_once 'funciones.php';

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

 $sql = "INSERT INTO plantas(id, nomcomun, nomcient, origen, descripcion, temporada) VALUES ('$id', '$nomcomun', '$nomcient', '$origen', '$descripcion', '$temporada');";
 mysqli_query($conn, $sql);

}

if(isset($_POST["modificar"])) {
  
    $nomcomunant = $_POST["nomcomunant"];
    $nomcomun = $_POST["nomcomun"];
    $nomcient = $_POST["nomcient"];
    $origen = $_POST["origen"];
    $descripcion = $_POST["descripcion"];
    $temporada = $_POST["temporada"];
   
    require_once 'index.php';
    require_once 'funciones.php';
   
    $sql = "UPDATE plantas SET nomcomun = '$nomcomun', nomcient = '$nomcient', origen = '$origen', descripcion = '$descripcion', temporada = '$temporada' WHERE nomcomun = '$nomcomunant';";
    mysqli_query($conn, $sql);
   
   }

if(isset($_POST["eliminar"])) {
  
    $nomcomun = $_POST["nomcomun"];
   
    require_once 'index.php';
    require_once 'funciones.php';
   
    $sql = "DELETE FROM plantas WHERE nomcomun = '$nomcomun';";
    mysqli_query($conn, $sql);
}