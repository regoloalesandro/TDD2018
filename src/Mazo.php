<?php

namespace TDD;

class Mazo {
  protected $cartas; 
  public function __construct($cartas) {
		$this->cartas = $cartas;
  }
  public function contarCartas(){
     return count($this->cartas);
  }
  public function mezclar() {
    return TRUE;
  }
  public function cartas(){
    return $this->cartas;
  }
  
}
