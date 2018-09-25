<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $numero= 2;
	$palo=NULL;
	$tipo=NULL;
        $carta = new Carta($numero,$palo,$tipo);
        $this->assertTrue(isset($carta));


    }
    /**
     * Valida si se gurada bien el numero en la carta
     */
    public function testtienenumero(){
        $numero = 2;
        $carta = new Carta($numero,NULL,NULL);
        $this->assertEquals($carta->numero(),2);
    }
/**
*Valida que se pueda mostrar el palo de la carta  y  su tipo
*/
     public function testTienePaloTipo(){
        $numero = 2;	
	$palo='espada';
	$tipo='española';
        $carta = new Carta($numero,$palo,$tipo);
        $this->assertEquals($carta->palo(),'espada');
	$this->assertEquals($carta->tipo(),'española');
    }
}
