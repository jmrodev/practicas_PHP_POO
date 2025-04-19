<?php
class Animal
{
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->setEdad($edad);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        if (is_numeric($edad) && $edad >=0) {
          $this->edad = $edad;
        } else {
          throw new Exception("La edad debe ser un numero positivo");          
        }         
    }
}

$animal = new Animal("Frey",6);

#echo $animal->nombre;
#echo $animal->edad;

echo "El nombre del animal es " . $animal->getNombre() . PHP_EOL;
echo "La edad de " . $animal->getNombre() . " es " . $animal->getEdad() . PHP_EOL;
