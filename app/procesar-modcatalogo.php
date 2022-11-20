<?php
header("Location: ../index.php");
session_start();
if(!empty($_POST['token'])){
         $nomcomun = $_POST["nomcomun"];
         $nomcient = $_POST["nomcient"];
         $origen = $_POST["origen"];
         $descripcion = $_POST["descripcion"];
         $temporada = $_POST["temporada"];

         require_once 'index.php';
         require_once 'funciones.php';

         $sql = "SELECT * FROM plantas WHERE id = (SELECT MAX(id) FROM plantas);";

         $resultado = mysqli_query($conn, $sql);
         if($resultado)
         {
            $array = mysqli_fetch_assoc($resultado);
            $id = $array['id'] + 1; 
         }
         else{
            $id = 1;
         }

         $stmt = $conn->prepare("INSERT INTO plantas(id, nomcomun, nomcient, origen, descripcion, temporada) VALUES(?,?,?,?,?,?)");
         $stmt->bind_param('isssss', $id, $nomcomun, $nomcient, $origen, $descripcion, $temporada);
         $stmt->execute();
         }

         if(isset($_POST["modificar"])) {
         
            $id = $_SESSION['id_planta'];
            $nomcomun = $_POST["nomcomun"];
            $nomcient = $_POST["nomcient"];
            $origen = $_POST["origen"];
            $descripcion = $_POST["descripcion"];
            $temporada = $_POST["temporada"];
            
            require_once 'index.php';
            require_once 'funciones.php';

            $stmt = $conn->prepare("UPDATE plantas SET nomcomun = ?, nomcient = ?, origen = ?, descripcion = ?, temporada = ? WHERE id = ?;");
            $stmt->bind_param('sssssi', $nomcomun, $nomcient, $origen, $descripcion, $temporada, $id);
            $stmt->execute();
         }
      
