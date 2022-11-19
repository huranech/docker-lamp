<?php
header("Location: ../catalogoplantas.php");
require_once('conexion.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM plantas WHERE id = ?;");
    $stmt->bind_param('i', $id);
    $stmt->execute();
}