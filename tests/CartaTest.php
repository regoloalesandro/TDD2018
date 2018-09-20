<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $numero= 2;
        $carta = new Carta($numero);
        $this->assertTrue(isset($carta));

    }
    /**
     * Valida si se gurada bien el numero en la carta
     */
    public function testtienenumero(){
        $numero = 2;
        $carta = new Carta($numero);
        $this->assertEquals($carta->numero(),2);
    }
}
