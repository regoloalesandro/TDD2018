<?php

namespace TDD;

class Mazo {
  protected $cartas; 
  public function __construct($cartas) {
		$this->cartas = $cartas;
  }
  public function contarCartas(){
     return array_count_values($this->cartas);
  }
  public function mezclar() {
    return TRUE;
  }
  
}
