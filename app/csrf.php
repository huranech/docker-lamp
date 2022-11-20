<?php

session_start();

function csrf(){
    if(function_exists('mcryp_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_RANDOM));

    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
return ($_SESSION['token']);
?>