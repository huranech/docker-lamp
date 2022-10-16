<?php
header("Location: ../catalogoplantas.php");

//Código que usamos para borrar plantas de forma individual gracias al botón "borrar"
require_once('conexion.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM plantas WHERE id = $id;";
    mysqli_query($conn, $sql);
}