<?php


namespace Alura\DesignPattern;


class GerarPedidoHandler
{
    public function __construct(/* PedidosRepository, MailService */)
    {
    }

    public function execute(GerarPedido $gerarPedido)
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarPedido->getValorOrcamento();
        $orcamento->quantidaDeItens = $gerarPedido->getNumeroDeItens();

        $pedido = new Pedido();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        // PedidosRepository
        echo "----- Cria pedido no banco de dados -----".PHP_EOL;
        // MailService
        echo "----- Envia email para cliente -----".PHP_EOL;
        // Gerar log
        echo "----- Gerar log de criação de pedido -----".PHP_EOL;
    }
}