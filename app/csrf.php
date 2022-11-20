<?php

session_start();
if(isset($_POST) & !empty($_POST)){
    //Validacion token CSRF
    if($_POST['csrf_token']== $_SESSION['csrf_token']){
        echo "token CSRF validado";
    } else{
        echo "Problemas de validacion con el token CSRF";
    }
}
// tiempo de validacion
$max_time = 60*60*24;
if(isset($_SESSION['csrf_token_time'])){
    $token_time = $_SESSION['csrf_token_time'];
    if(($token_time + $max_time) >= time()){
        unset($_SESSION)['csrf_token'];
        unset($_SESSION)['csrf_token_time'];
    }
}
    

//1. crear token
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
//2. añadir token al formulario
//<input type="hidden" name="csrf_token" value="<?php echo $token;

?> 