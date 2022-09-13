<?php

use Calculadora\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase{

    public function testCalcularSoma()
    {
        $calculadora = new Calculadora;
        $this->assertEquals('9',$calculadora->somar(5,4));
    }

    public function testExceptionCalcularSoma()
    {
        $calculadora = new Calculadora;
        $this->assertEquals(5,$calculadora->somar());
        $this->expectException(\ArgumentCountError::class);
    }

}