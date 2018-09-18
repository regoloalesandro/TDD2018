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
     * Valida que se pueda agregar una carta al mazo.
     */
    public function testPoseeCartas(){
    	$mazo = new Mazo;
	$mazo->agregarcarta();
	$this->assertTrue(isset($mazo->carta));
    
    }

}
