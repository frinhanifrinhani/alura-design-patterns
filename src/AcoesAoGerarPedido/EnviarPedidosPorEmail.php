<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class EnviarPedidosPorEmail implements AcaoAoGerarPedido
{
    public function executarAcao(Pedido $pedido)
    {
        echo "Enviar dados do pedido para email";
    }
}