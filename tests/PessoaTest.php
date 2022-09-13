<?php

use Pessoa\Pessoa;
use PHPUnit\Framework\TestCase;

class PessoaTest extends TestCase{

    public function testSeNomeDaPessoaEString()
    {
        $pessoa = new Pessoa;
        $this->expectOutputString('João');
        $pessoa->nome('João');
    }

}