<?php 

if (isset($_POST["Registrar"])) {
    session_start();
    $_SESSION["usuario"] = htmlentities($_POST["usuaruio"]);
    $_SESSION["apellido"] = htmlentities($_POST["apellido"]);
    $_SESSION["correo"] = htmlentities($_POST["correo"]);


    header ("Location: Sesion.php");

}    



echo "nombre". $nombre;
echo "apellido" . $apellido;
echo "correo" . $correo;



?>