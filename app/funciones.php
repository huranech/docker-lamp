<?php

crearUsuario($conn, $nombre, $usuario, $contrasena, $dni, $telefono, $fechanato, $email) {

    $sql = "INSERT INTO usuarios (nombre, usuario, contraseña, DNI, telefono, fechanato, email) VALUES (?, ?, ?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registrarse.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssss", $nombre, $usuario, $contrasena, $dni, $telefono, $fechanato, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registrarse.html?error=none");
    exit();
}