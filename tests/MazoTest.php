<?php

namespace TDD;

use PHPUnit\Framework\TestCase;

class MazoTest extends TestCase {

    /**
     * Valida que se puedan crear mazos de cartas.
     */
    public function testExiste() {
	$carta1= new Carta(NULL,NULL,NULL);
        $carta2= new Carta(NULL,NULL,NULL);
        $carta3= new Carta(NULL,NULL,NULL);
        $cartas =array($carta1,$carta2,$carta3);
        $deck = new Mazo($cartas);
        $this->assertTrue(isset($deck));
    }
    /**
     * Valida que se pueda mezclar el mazo.
     */
    public function testMezclable() {
        $carta1= new Carta(NULL,NULL,NULL);
        $carta2= new Carta(NULL,NULL,NULL);
        $carta3= new Carta(NULL,NULL,NULL);
	$carta4= new Carta(NULL,NULL,NULL);
	$carta5= new Carta(NULL,NULL,NULL);
	$carta6= new Carta(NULL,NULL,NULL);
	$carta7= new Carta(NULL,NULL,NULL);
        $cartas =array($carta1,$carta2,$carta3,$carta4,$carta5,$carta6,$carta7);
	$mazo = new Mazo($cartas);	    
        $this->assertNotEquals($mazo->mezclar(),$mazo);
        $mazo2= new Mazo(array());
        $this->assertEquals($mazo2->mezclar(),array());
    }
     /**
     * Validar si el mazo tien cartas.
     */	
    public function testPoseeCartas(){	
        $carta1= new Carta(NULL,NULL,NULL);
        $carta2= new Carta(NULL,NULL,NULL);
        $carta3= new Carta(NULL,NULL,NULL);
	$carta4= new Carta(NULL,NULL,NULL);
	$carta5= new Carta(NULL,NULL,NULL);
	$carta6= new Carta(NULL,NULL,NULL);
	$carta7= new Carta(NULL,NULL,NULL);
        $cartas =array($carta1,$carta2,$carta3,$carta4,$carta5,$carta6,$carta7);
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
	$carta1= new Carta(NULL,NULL,NULL);
        $carta2= new Carta(NULL,NULL,NULL);
        $carta3= new Carta(NULL,NULL,NULL);
	$carta4= new Carta(NULL,NULL,NULL);
	$carta5= new Carta(NULL,NULL,NULL);
	$carta6= new Carta(NULL,NULL,NULL);
	$carta7= new Carta(NULL,NULL,NULL);
        $cartas2 =array($carta1,$carta2,$carta3,$carta4,$carta5,$carta6,$carta7);
	$mazo2 = new Mazo($cartas2);
	$this->assertNotEquals($mazo2->contarCartas(),0);
	
    }
    /**
     * Valida si se puede agregar una carta al mazo
     */
    public function testAgregarCarta(){
        $cartas=array();
        $mazo=new Mazo($cartas);
        $mazo2 = new Mazo($cartas);
	$carta=new Carta(NULL,NULL,NULL);
        $mazo->agregarCarta($carta);
        $this-> assertNotEquals($mazo,$mazo2);
    }

    /**
     * Valida si se puede pedir una carta y que no se pueda cuando no haya cartas 
     */
    public function testPedirCarta(){
         $carta1= new Carta(NULL,NULL,NULL);
        $carta2= new Carta(NULL,NULL,NULL);
        $carta3= new Carta(NULL,NULL,NULL);
	$carta4= new Carta(NULL,NULL,NULL);
	$carta5= new Carta(NULL,NULL,NULL);
	$carta6= new Carta(NULL,NULL,NULL);
	$carta7= new Carta(NULL,NULL,NULL);
        $cartas =array($carta1,$carta2,$carta3,$carta4,$carta5,$carta6,$carta7);
        $mazo= new Mazo($cartas);
        $this->assertTrue(null !== $mazo->pedirCarta());
        $mazo2= new Mazo(array());
        $this->assertEquals(array(),$mazo2->pedirCarta());
    }

    /**
     * Valida si se puede cortar el mazo
     */
    public function testCorte(){
        $carta1= new Carta(NULL,NULL,NULL);
        $carta2= new Carta(NULL,NULL,NULL);
        $carta3= new Carta(NULL,NULL,NULL);
	$carta4= new Carta(NULL,NULL,NULL);
	$carta5= new Carta(NULL,NULL,NULL);
	$carta6= new Carta(NULL,NULL,NULL);
	$carta7= new Carta(NULL,NULL,NULL);
        $cartas =array($carta1,$carta2,$carta3,$carta4,$carta5,$carta6,$carta7);
        $mazo = new Mazo($cartas);
        $numero= rand(0, contarCartas());	    
        $this->assertNotEquals($mazo->cortar($numero),$mazo);
        $mazo2= new Mazo(array());
        $this->assertEquals($mazo2->cortar($numero),array());
    }


    }
}
