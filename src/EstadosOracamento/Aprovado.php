<?php


namespace Alura\DesignPattern\EstadosOracamento;


use Alura\DesignPattern\Orcamento;

class Aprovado
{
    public function calucalDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}