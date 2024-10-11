<?php


// Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)

class Avion {
    private $clase;
    private $serie;
    private $pasageros;


    public function setClase($clase) {
        $this->clase = $clase;
    }
    public function setSerie($serie) {
        $this->serie = $serie;
    }

    public function __call($land, $arguments) {
        if ($land === 'aterrizar') {
            return "El avión " . $this->clase . " " . $this->serie . " puede aterrizar.";
        } else {
            return "El avión " . $this->clase . " " . $this->serie . " no puede realizar la acción: " . $land . ".";
        }
    }
    public function __get($nombre) {
        if ($nombre === 'clase') {
            return $this->clase;
        } elseif ($nombre === 'serie') {
            return $this->serie;
        } else {
            return "No autorizado";
        }
    }
}



$Delta2 = new Avion();
$Delta2->setClase("Boeing");
$Delta2->setSerie(745);

echo $Delta2->aterrizar(); 
echo "<br>"; 
echo $Delta2->volar();  
echo "<br>"; 
echo "Clase del avion ". $Delta2->clase;
echo "<br>"; 
echo "Cuantos pasageros hay? ". $Delta2->pasageros;

?>

