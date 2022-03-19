<?php


namespace Alura\DesignPattern;

class GerarPedido
{
    private float $valorOrcamento;
    private int $numeroDeItens;
    private string $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroDeItens,
        string $nomeCliente
    ) {

        $this->valorOrcamento = $valorOrcamento;
        $this->numeroDeItens = $numeroDeItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {

        $orcamento = new Orcamento();
        $orcamento->valor = $this->valorOrcamento;
        $orcamento->quantidadeItens = $this->numeroDeItens;

        $pedido = new Pedido();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        echo "----- Cria pedido no banco de dados -----".PHP_EOL;
        echo "----- Envia email para cliente -----".PHP_EOL;
    }
}