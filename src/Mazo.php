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
    return shuffle($this->cartas);
  }
  public function cartas(){
    return $this->cartas;
  }
  public function agregarCarta($numero){
    
   array_push($this->cartas,$numero);
  }
  public function pedirCarta(){
    $this->mezclar();
    return array_pop($this->cartas);
  }
}
