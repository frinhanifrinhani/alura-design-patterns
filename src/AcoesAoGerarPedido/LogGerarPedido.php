<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class LogGerarPedido
{
    public function executarAcao(Pedido $pedido)
    {
        echo "Gravar log ao gerar pedido";
    }
}