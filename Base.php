<?php 
/*

Crea un formulari HTML amb els camps que vulguis (almenys un nom o username). 
El formulari ha de tenir com a action un document PHP. 
El codi d’aquest document PHP haurà de mostrar els valors dels diferents camps 
del formulari mitjançant variables superglobals. 
Enregistra a més, alguns d’aquests valors dins de variables de sessió.
*/


session_start();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

$_SESSION['nombre'] = $nombre;
$_SESSION['apellido'] = $apellido;
$_SESSION['correo'] = $correo;            

header("Location: Sesion.php");
exit();

/*echo $nombre. "</br>";
echo $apellido. "</br>";
echo $correo. "</br>";
*/


?>