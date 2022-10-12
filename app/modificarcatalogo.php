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
            <h3>Añade una planta</h1>

            <input type="text" name="nomcomun" placeholder="Nombre común" required>

            <input type="text" name="nomcient" placeholder="Nombre científico" required>

            <input type="text" name="origen" placeholder="Origen" required>

            Comestible
            <select name="comestible">
                <option value="si">Sí</option>
                <option value="si">No</option>
            </select>

            <input type="text" name="temporada" placeholder="Temporada" required>

            <input type="submit" name="submit" value="Añadir Planta">
    </form>
    </div>
</body>
</html>