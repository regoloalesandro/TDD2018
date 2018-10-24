<?php

namespace TDD;

class Carta {
   protected $numero;
   protected $palo;
   protected $tipo;
   public function __construct($numero,$palo,$tipo) {
        $this->numero = $numero;
	$this->palo = $palo;
	$this->tipo = $tipo;
    }
  public function numero(){
      return $this->numero; 
  }
  public function palo(){
      return $this->palo; 
  }
  public function tipo(){
      return $this->tipo; 
  }
}
