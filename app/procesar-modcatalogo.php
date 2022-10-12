<?php

if(isset($_POST["anadir"])) {
  
 $nomcomun = $_POST["nomcomun"];
 $nomcient = $_POST["nomcient"];
 $origen = $_POST["origen"];
 $descripcion = $_POST["descripcion"];
 $temporada = $_POST["temporada"];

 require_once 'index.php';
 require_once 'funciones.php';

 $id = random_num(11);
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