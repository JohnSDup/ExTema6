<?php

// Fes un programa que faci servir almenys un parell de constants màgiques.

$p1 = " contanste ";
$p2 =  " magica ";

Class constante {
    function mostrarConstante($p1,$p2): string {
        return " Esto es una ; ". $p1 . " " . $p2 . " en la linia " . __LINE__ . 
        " que se encuentra en una clase llamada; " . __CLASS__;
    }

}

$test = new constante();
echo $test-> mostrarConstante($p1,$p2);

?>