<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAoGerarPedido
{
    public function executarAcao(Pedido $pedido)
    {
        echo "Gravar log ao gerar pedido";
    }
}