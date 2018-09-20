<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
        $cartas =array();
        $deck = new Mazo($cartas);
        $this->assertTrue(isset($deck));
    }
    /**
     * Valida que se pueda mezclar el mazo.
     */
    public function testMezclable() {
        $cartas = range(1,50);
	    $mazo = new Mazo($cartas);	    
        $this->assertNotEquals($mazo->mezclar(),$mazo);
    }
     /**
     * Validar si el mazo tien cartas.
     */	
    public function testPoseeCartas(){
    	
    $cartas = range(1, 50);
    $mazo = new Mazo($cartas);
	$this->assertTrue(null !== $mazo->cartas() );
    
    }
    /** 
    *Ver si el mazo esta vacio o no
    */
    public function testvacio(){
        $cartas = array();
	$mazo = new Mazo($cartas);
	$this->assertEquals($mazo->contarCartas(),0);
	$cartas2 = range(1, 50);
	$mazo2 = new Mazo($cartas2);
	$this->assertNotEquals($mazo2->contarCartas(),0);
	
    }
    /**
     * Valida si se puede agregar una carta al mazo
     */
    public function testAgregarCarta(){
        $carta=array();
        $mazo=new Mazo($carta);
        $mazo2 = new Mazo($carta);
        $mazo->agregarCarta(420);
        $this-> assertNotEquals($mazo,$mazo2);
    }

    /**
     * Valida si se puede pedir una carta 
     */
    public function testPedirCarta(){
        $carta=range(1,50);
        $mazo= new Mazo($carta);
        $this->assertTrue(null !== $mazo->pedirCarta());
    }
}
