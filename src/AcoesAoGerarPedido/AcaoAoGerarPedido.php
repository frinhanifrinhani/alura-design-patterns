<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

interface AcaoAoGerarPedido
{
    public function executarAcao(Pedido $pedido);
}