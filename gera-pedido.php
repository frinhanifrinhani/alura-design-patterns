<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedidoHandler, GerarPedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento,$numeroDeItens,$nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);