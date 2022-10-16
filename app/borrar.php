<?php
header("Location: ../index.php");
require_once('conexion.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM plantas  WHERE id = $id;";
    mysqli_query($conn, $sql);
}