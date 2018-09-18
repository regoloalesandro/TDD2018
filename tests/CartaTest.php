<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class CartaTest extends TestCase {

    /**
     * Valida que se puedan crear cartas.
     */
    public function testExiste() {
        $numero= 2;
        $carta = new carta($numero);
        $this->assertTrue(isset($carta));
    }

}
