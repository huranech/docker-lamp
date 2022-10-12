<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Modifica los datos que quieras del catálogo</h1>
        <form action="procesar-modcatalogo.php" method="post">
            <h3>Añade una planta</h3>

            <input type="text" name="nomcomun" placeholder="Nombre común" required>

            <input type="text" name="nomcient" placeholder="Nombre científico" required>

            <input type="text" name="origen" placeholder="Origen" required>

            <input type="text" name="descripcion" placeholder="Descripción" required>

            <input type="text" name="temporada" placeholder="Temporada" required>

            <input type="submit" name="anadir" value="Añadir Planta">
    </form>
    </div>
    <div>
        <h3>Modifica una planta<h3>
        <form action="procesar-modcatalogo.php" method="post">
        <input type="text" name="nomcomunant" placeholder="Nombre común antiguo de la planta a cambiar" required>

        <input type="text" name="nomcomun" placeholder="Nombre común nuevo" required>

        <input type="text" name="nomcient" placeholder="Nombre científico" required>

        <input type="text" name="origen" placeholder="Origen" required>

        <input type="text" name="descripcion" placeholder="Descripción" required>

        <input type="text" name="temporada" placeholder="Temporada" required>

        <input type="submit" name="modificar" value="Modificar Planta">
        </form>
    </div>
    <div>
        <h3>Elimina una planta</h3>
        <form action="procesar-modcatalogo.php" method="post">
            Introduce el nombre común de la planta que quieres eliminar
            <input type="text" name="nomcomun">
            <input type="submit" name="eliminar" value="Eliminar Planta">
        </form>
    </div>
</body>
</html>