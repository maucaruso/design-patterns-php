<?php

use PHP\DesignPattern\ItemOrcamento;
use PHP\DesignPattern\NotaFiscal\ConstrutorNotaFiscalProduto;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscalProduto();

$item1 = new ItemOrcamento();
$item1->valor = 500;

$item2 = new ItemOrcamento();
$item2->valor = 500;

$item3 = new ItemOrcamento();
$item3->valor = 500;

$notaFiscal = $builder->paraEmpresa('1234567', 'maurici tecnologias')
  ->comItem($item1)
  ->comItem($item2)
  ->comItem($item3)
  ->comObservacoes('Esta nota fical foi feita com um construtor')
  ->constroi();
  
// $notaFiscal2 = $notaFiscal->clonar();
// $notaFiscal2->itens[] = new ItemOrcamento();

$notaFiscal2 = clone $notaFiscal;
$notaFiscal2->itens[] = new ItemOrcamento();

var_dump($notaFiscal, $notaFiscal2);