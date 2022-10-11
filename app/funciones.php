<?php

require_once 'conexion.php';

function check_login($conn)
{
    if(isset($_SESSION['id_usuario']))
    {
      $id = $_SESSION['id_usuario'];
      $sql = "SELECT * FROM usuarios where id = '$id' LIMIT 1;";

      $resutl = mysqli_query($conn, $sql);
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
      }
    }
}

function random_num($length)
{
    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4, $length);
    for($i=0; $i < $len; $i++)
    {
        $text .= rand(0, 9);
    }

    return $text;
}