<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <div>
        <h1>Catalogo de plantas</h1>

<?php

$hostname = "db";
$username = "admin";
$password = "test";
$db = "database"

$conn = mysqli_connect($hostname,$username,$password,$db);
if (!$conn) {
    echo 'No se pudo conectar a mysql';
    exit;
}

$sql = "SHOW TABLES FROM $db";
$resultado = mysqli_query($sql);

//if (!$resultado) {
    //echo "Error de BD, no se pudieron listar las tablas\n";
    //echo 'Error MySQL: ' . mysql_error();
    //exit;
//}

while ($fila = mysql_fetch_row($resultado)) {
    echo "Tabla: {$fila[0]}\n";
}

mysql_free_result($resultado);

?>
    </div>
</body>
</html>
