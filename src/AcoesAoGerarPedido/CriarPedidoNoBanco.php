<?php


namespace Alura\DesignPattern\AcoesAoGerarPedido;


use Alura\DesignPattern\Pedido;

class CriarPedidoNoBanco
{
    public function executarAcao(Pedido $pedido)
    {
        echo "Salvar dados do pedido no banco de dados";
    }
}