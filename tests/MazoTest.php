<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $mazo = new Mazo;
        $this->assertTrue(isset($mazo));
    }
    /**
     * Valida que se pueda mezclar el mazo.
     */
    public function testMezclable() {
        $mazo = new Mazo;
	    $mazo2= $mazo;
	    $mazo->mezclar();
        $this->assertNotEquals($mazo,$mazo2);
    }
     /**
     * Validar si el mazo tien cartas.
     */	
    public function testPoseeCartas(){
    	$mazo = new Mazo;
	$cartas = range(1, 50);
	$mazo->agregarcarta($cartas);
	$this->assertTrue(isset($mazo->carta));
    
    }
    /** 
    *Ver si el mazo esta vacio o no
    */
    public function testvacio(){
    	public $cartas;
	$mazo = new Mazo($cartas);
	$this->assertEquals($mazo->cantidadCartas(),0);
	$cartas2 = range(1, 50);
	$mazo2 = new Mazo($cartas);
	$this->assertNotEquals($mazo->cantidadCartas(),0);
	
    }

}
