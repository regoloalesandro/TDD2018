<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $cartas
        $mazo = new Mazo($cartas);
        $this->assertTrue(isset($mazo));
    }
    /**
     * Valida que se pueda mezclar el mazo.
     */
    public function testMezclable() {
        $cartas = range(1,50);
	    $mazo = new Mazo($cartas);
	    $mazo2= $mazo;
        $this->assertNotEquals($ $mazo->mezclar();,$mazo2);
    }
     /**
     * Validar si el mazo tien cartas.
     */	
    public function testPoseeCartas(){
    	
    $cartas = range(1, 50);
    $mazo = new Mazo($cartas);
	$mazo->agregarcarta($cartas);
	$this->assertTrue(isset($mazo->carta));
    
    }
    /** 
    *Ver si el mazo esta vacio o no
    */
    public function testvacio(){
        $cartas = array();
	$mazo = new Mazo($cartas);
	$this->assertEquals($mazo->cantidadCartas(),0);
	$cartas2 = range(1, 50);
	$mazo2 = new Mazo($cartas);
	$this->assertNotEquals($mazo->cantidadCartas(),0);
	
    }

}
