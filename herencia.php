<?php
class Animal
{
    protected $nombre;
    protected $edad;


    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function comer()
    {
        return "{$this->nombre} está comiendo";
    }

    public function dormir()
    {
        return "{$this->nombre} esta durmiendo ZZZ .....";
    }

    public function getInfo()
    {
        return "{$this->nombre} tiene {$this->edad}";
    }
}

class Gato extends Animal
{
    private $color;
    private $raza;

    public function __construct($nombre, $edad, $color, $raza)
    {
        parent::__construct($nombre, $edad);
        $this->color = $color;
        $this->raza = $raza;
    }

    public function maullar()
    {
        return "{$this->nombre} miauuu!!!";
    }

    public function ronronear()
    {
        return "{$this->nombre} ronronea RRRRRRR!!";
    }

    public function getInfo()
    {
        $infoBase = parent::getInfo();
        return "$infoBase, Color : {$this->color},Raza:{$this->raza}";
    }
}

$animal = new Animal("Criatura", 3);
echo $animal->getInfo() . PHP_EOL;
echo $animal->comer() . PHP_EOL;
echo $animal->dormir() . PHP_EOL;

$gato = new Gato("Bigotes", 2, "Naranja", "Persa");
echo $gato->getInfo() . PHP_EOL;
echo $gato->comer() . PHP_EOL;
echo $gato->dormir() . PHP_EOL;
echo $gato->maullar() . PHP_EOL;
echo $gato->ronronear() . PHP_EOL;
