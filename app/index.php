<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de plantas</title>
</head>
<body>
  <?php
    echo '<h1>Yeah, it works!<h1>';
    // phpinfo();
    $hostname = "db";
    $username = "admin";
    $password = "test";
    $db = "database";

    $conn = mysqli_connect($hostname,$username,$password,$db);
    if ($conn->connect_error) {
      die("Database connection failed: " . $conn->connect_error);
    }



  $query = mysqli_query($conn, "SELECT * FROM usuarios")
    or die (mysqli_error($conn));

  while ($row = mysqli_fetch_array($query)) {
    echo
    "<tr>
      <td>{$row['id']}</td>
      <td>{$row['nombre']}</td>
    </tr>";
    

  }

  ?>
</body>
</html>


