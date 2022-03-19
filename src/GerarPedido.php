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

    /**
     * @return float
     */
    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    /**
     * @param float $valorOrcamento
     */
    public function setValorOrcamento(float $valorOrcamento): void
    {
        $this->valorOrcamento = $valorOrcamento;
    }

    /**
     * @return int
     */
    public function getNumeroDeItens(): int
    {
        return $this->numeroDeItens;
    }

    /**
     * @param int $numeroDeItens
     */
    public function setNumeroDeItens(int $numeroDeItens): void
    {
        $this->numeroDeItens = $numeroDeItens;
    }

    /**
     * @return string
     */
    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    /**
     * @param string $nomeCliente
     */
    public function setNomeCliente(string $nomeCliente): void
    {
        $this->nomeCliente = $nomeCliente;
    }

}