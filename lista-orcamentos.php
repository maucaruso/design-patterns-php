<?php

require_once 'vendor/autoload.php';

use PHP\DesignPattern\ListaDeOrcamentos;
use PHP\DesignPattern\Orcamento;

$listaOrcamentos = [];

$orcamento1 = new Orcamento();
$orcamento1->quantidadeItens = 7;
$orcamento1->aprova();
$orcamento1->valor = 1500.75;

$orcamento2 = new Orcamento();
$orcamento2->quantidadeItens = 3;
$orcamento2->reprova();
$orcamento2->valor = 150.75;

$orcamento3 = new Orcamento();
$orcamento3->quantidadeItens = 7;
$orcamento3->valor = 1350.75;
$orcamento3->aprova();
$orcamento3->finaliza();

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamento1);
$listaOrcamentos->addOrcamento($orcamento2);
$listaOrcamentos->addOrcamento($orcamento3);

// $listaOrcamentos = [
//   $orcamento1,
//   $orcamento2,
//   $orcamento3,
//   'putting an intruder type here'
// ];

foreach ($listaOrcamentos->orcamentosFinalizados() as $orcamento) {
  echo "Valor: " . $orcamento->valor . PHP_EOL;
  echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
  echo "Qtd. Itens: " . $orcamento->quantidadeItens . PHP_EOL;
  
  echo PHP_EOL;
}