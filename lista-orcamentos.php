<?php

use Alura\DesignPattern\{Orcamento,ListaDeOrcamentos};

require_once 'vendor/autoload.php';

$listaDeOrcamentos = [];

$orcamento1 = new Orcamento();
$orcamento1->quantidaDeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidaDeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150;

$orcamento3 = new Orcamento();
$orcamento3->quantidaDeItens = 5;
$orcamento3->reprova();
$orcamento3->finaliza();
$orcamento3->valor = 1350;

$listaDeOrcamentos = new ListaDeOrcamentos();
$listaDeOrcamentos->addOrcamento($orcamento1);
$listaDeOrcamentos->addOrcamento($orcamento2);
$listaDeOrcamentos->addOrcamento($orcamento3);

foreach ($listaDeOrcamentos as $orcamento){
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "Qnt. Itens: " . $orcamento->quantidaDeItens . PHP_EOL;

    echo PHP_EOL;
}
echo PHP_EOL;
echo '---------';
echo PHP_EOL;

foreach ($listaDeOrcamentos->orcamentosFinalizados() as $orcamentosFinalizado){
    echo "Valor: " . $orcamentosFinalizado->valor . PHP_EOL;
    echo "Estado: " . get_class($orcamentosFinalizado->estadoAtual) . PHP_EOL;
    echo "Qnt. Itens: " . $orcamentosFinalizado->quantidaDeItens . PHP_EOL;

    echo PHP_EOL;
}


