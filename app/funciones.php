<?php

require_once 'conexion.php';

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

function validar_texto($nombre)
{
    if (preg_match ("/^[a-zA-z]*$/", $nombre) ) {  
        return true;
    } else {
        echo "Sólo se admiten letras del alfabeto o espacios";
        return false;
    }  
}

function validar_tel($telefono)
{
    if(preg_match('/^[0-9]{9}+$/', $telefono)) {
        return true;
    }
    else 
    {
        echo "número de teléfono inválido";
        return false;
    }
}


