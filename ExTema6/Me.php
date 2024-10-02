<?php
__LINE__ //Devuelve la linia donde este la constante
__FILE__ // ruta completa
__DIR__ //directorio de archivo +directo
__FUNCTION__ // Nombre de la funcion
__CLASS__ // nombre de la classe
__METHOD__ //nombre del metodo
__NAMESPACE__ // devuelve el nombre del namespace  = namespace SitioWeb;

===============================

__construct() //de una clase se ejecuta cuando se crear una instancia
__destruct() // cuando un ojecto es destruido ej : unset ($cuenta);
__get() // para acceder una propiedad de un objecto (no se puede acceder o no existe)
__set() // Para asignar una valor a una propiedad (no se puede acceder o no existe)
__call() //  para llamar a metodos (no se puede acceder o no existe)
__callStatic() //igual que el call pero cuando es static
__isset() // cuando se utiliza isset() y empty() (no se puede acceder o no existe)
__unset() // cuando se utiliza unset() (no se puede acceder o no existe)
__toString() // cuando se utiliza una cadena 
__invoke() // un objecto se trata como una funcion
__clone() // cuando se clona un objeto ej: cuenta1 / cuenta2 = clone $cuenta1;
__debugInfo() // personaliza la salida  ej: return ["paga impuestos" =>$this->sueldo >= 20000,]

?>