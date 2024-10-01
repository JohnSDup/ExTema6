<?php
session_start();

if (isset($_SESSION['nombre']) && isset($_SESSION['apellido']) && isset($_SESSION['correo'])) {
    echo "Nombre: " . $_SESSION['nombre'] . "</br>";
    echo "Apellido: " . $_SESSION['apellido']. "</br>";
    echo "Correo: " . $_SESSION['correo']. "</br>";
} else {
    echo "No se han encontrado datos en la sesión" . "</br>";
}

/*$varsesion = $_SESSION ['usuario'];
if ($varsesion == null || $varsesion == '') {
    echo 'Acceso restringido';
    die();
}  
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="SesionClose.php">Cerrar sesion</a>
</body>
</html>

