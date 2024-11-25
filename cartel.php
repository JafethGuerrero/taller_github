<?php

include "conexion.php";

$id = $_GET['id'];

$sql = "SELECT * FROM cartel WHERE id = $id";
$result = mysqli_query($conexion, $sql);
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cartel</h1>
    <p>Nombre: <?php echo $row['nombre']; ?></p>
    <p>Dirección: <?php echo $row['direccion']; ?></p>
    <p>Teléfono: <?php echo $row['telefono']; ?></p>
    <p>Email: <?php echo $row['email']; ?></p>
</body>
</html> 
