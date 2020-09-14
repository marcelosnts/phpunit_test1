<?php

namespace CodeExperts\Aritmetico;

use PHPUnit\Framework\TestCase;

class SubtracaoTest extends TestCase {
    public function assertPreConditions(){
        $this->assertTrue(
            class_exists('CodeExperts\Aritmetico\Subtracao')
        );
    }

    public function testSubtracaoDeDoisNumeros(){
        $subtracao = new Subtracao();

        $subtracao->setNum1(20);
        $subtracao->setNum2(10);

        $this->assertEquals(10, $subtracao->subtrair()); 


        $subtracao->setNum1(30);
        $subtracao->setNum2(15);

        $this->assertEquals(15, $subtracao->subtrair()); 
    }

    /**
    * @expectedException \InvalidArgumentException
    * @expectedExceptionMessage Parametro nao informado
    */

    public function testValidaSeValoresNaoForemPassados(){
        $subtracao = new Subtracao();

        $subtracao->setNum1(30);
        $subtracao->setNum2();
    }
}