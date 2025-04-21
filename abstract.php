<?php

abstract class Felino{
  protected $nombre;
  protected $peso;

  public function __construct($nombre,$peso){
    $this->nombre = $nombre;
  }

  public function __construct( $nombre,$peso) {
    $this->nombre = $nombre;
    $this->peso = $peso;
  }

  public function dormir() {
    return "{$this->nombre} esta durmiendoprofundamenete... ZZZ"
  }


}
