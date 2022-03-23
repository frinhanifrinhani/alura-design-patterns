<?php


namespace Alura\DesignPattern;


use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAoGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidosPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    /** @var AcaoAoGerarPedido[] */
    private array $acaoAposGerarPedido = [];

    public function __construct(/* PedidosRepository, MailService */)
    {
    }

    public function adicinarAcaoAoGerarPedido(AcaoAoGerarPedido $acao)
    {
        $this->acaoAposGerarPedido[] = $acao;
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
        
        foreach ($this->acaoAposGerarPedido as $acao){
            $acao->executarAcao($pedido);
        }

    }
}