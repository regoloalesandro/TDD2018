<?php

namespace TDD;

class Mazo {
  protected $cartas; 
  public function __construct($cards) {
		$this->cartas = $cards;
  }
  public function contarCartas(){
     return count($this->cartas);
  }
  public function mezclar() {
    if ($this->cartas == array()){
      return array();
    }
    return shuffle($this->cartas);
  }
  public function cartas(){
    return $this->cartas;
  }
  public function agregarCarta($numero){
    
   array_push($this->cartas,$numero);
  }
  public function pedirCarta(){
    if($this->cartas == array()){
      return array();
    }
    return array_pop($this->cartas);
  }
  public function cortar($numero){
    if($this->cartas == array()){
      return array();
    }
    return array_merge(array_slice($this->cartas,0,$numero),array_slice($this->cartas,$numero));
  }
}
