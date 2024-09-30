<?php

session_start();

$nombre = $_SESSION["usuario"];
$nombre = $_SESSION["apellido"];
$correo = $_SESSION["correo"];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo $nombre,$apellido; ?></h1>
    <h1>El mail <?php echo $correo; ?></h1>
    se ha registrado correctamente<h1></h1>
    
</body>
</html>