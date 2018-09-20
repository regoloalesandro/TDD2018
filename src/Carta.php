<?php

namespace TDD;

class Carta {
   protected $numero;
   public function __construct($numero) {
    $this->numero = $numero;
    }
  public function numero(){
      return $this->numero; 
  }
}
