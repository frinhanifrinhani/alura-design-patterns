<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidosPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

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
        
        $pedidosRepository = new CriarPedidoNoBanco();
        $enviarPedidosPorEmail = new EnviarPedidosPorEmail();
        $logGerarPedidos = new LogGerarPedido();

        $pedidosRepository->executarAcao($pedido);
        $enviarPedidosPorEmail->executarAcao($pedido);
        $logGerarPedidos->executarAcao($pedido);

    }
}