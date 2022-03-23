<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedidoHandler, GerarPedido};
use Alura\DesignPattern\AcoesAoGerarPedido\{CriarPedidoNoBanco, LogGerarPedido, EnviarPedidosPorEmail};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento,$numeroDeItens,$nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->adicinarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicinarAcaoAoGerarPedido(new EnviarPedidosPorEmail());
$gerarPedidoHandler->adicinarAcaoAoGerarPedido(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);