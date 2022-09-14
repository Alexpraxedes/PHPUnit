<?php

use Calculadora\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{

    public static function setUpBeforeClass(): void
    {
        echo "SetUp executado antes dos métodos da classe ";
    }

    public static function tearDownAfterClass(): void
    {   
        echo "TearDown executado depois dos métodos da classe ";
    }

    public function testDaFuncaoSomar()
    {
        $status = 'inativo';
        if($status != 'ativo'){
            $this->markTestSkipped('O teste está com o status inativo');
        }
        $calculadora = new Calculadora;
        $this->assertEquals('9',$calculadora->somar(5,4));
    }

    public function testExceptionCalculoSomaFaltandoArgumentos()
    {
        $calculadora = new Calculadora;
        $this->assertEquals(5,$calculadora->somar());
        $this->expectException(\ArgumentCountError::class);
    }
    

}