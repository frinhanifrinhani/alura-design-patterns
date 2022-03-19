<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class EnviarPedidosPorEmail
{
    public function executarAcao(Pedido $pedido)
    {
        echo "Enviar dados do pedido para email";
    }
}