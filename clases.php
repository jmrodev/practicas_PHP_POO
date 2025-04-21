<?php

class Gato
{
  public $nombre;
  public $color;
  public $edad;

  public function maullar()
  {
    echo "$this->nombre dice Miauu!" . PHP_EOL;
  }

  public function dormir()
  {
    echo "$this->nombre esta durmiendo" . PHP_EOL;
  }
}

$mi_gato = new Gato();
$mi_gato->nombre = "Pelusa";
$mi_gato->color = "Gris";
$mi_gato->edad = 4;

echo $mi_gato->nombre .PHP_EOL;
$mi_gato->maullar();
$mi_gato->dormir();

$gato2 = new Gato();
$gato2->nombre = "lolo";
$gato2->color = "Blanco";

echo $gato2->nombre . PHP_EOL;
echo $gato2->color . PHP_EOL;
