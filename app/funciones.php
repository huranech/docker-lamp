<?php

require_once 'conexion.php';


//comprueba que el nombre sea válido
function validar_texto($nombre)
{
    if (preg_match ("/^[a-zA-Z][a-zA-Z\s]*$/", $nombre) ) {  
        return true;
    } else {
        echo "Sólo se admiten letras del alfabeto o espacios";
        return false;
    }  
}

//comprueba que el número de teléfono sea válido
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

//comprueba que la fecha de nacimiento sea válida
function validar_fecha($fecha, $formato = 'Y-m-d'){
    $d = DateTime::createFromFormat($formato, $fecha);
    if ($d && $d->format($formato) === $fecha)
    {
        return true;
    }
    else
    {
        echo "formato de fecha incorrecto";
        return false;
    }
}

//comprueba que el DNI sea válido
function validar_dni($dni){
    $letra = substr($dni, -1);
    $guion = substr($dni, -2, -1);
    $numeros = substr($dni, 0, -2);
  
    if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 && $guion == "-"){
        return true;
    }
    else
    {
        echo "formato de dni incorrecto";
        return false;
    }
    
  }