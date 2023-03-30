<?php

use PHP\DesignPattern\ItemOrcamento;
use PHP\DesignPattern\NotaFiscal\ConstrutorNotaFiscal;

require 'vendor/autoload.php';

$builder = new ConstrutorNotaFiscal();

$notaFiscal = $builder->paraEmpresa('1234567', 'maurici tecnologias')
  ->comItem(new ItemOrcamento())
  ->comItem(new ItemOrcamento())
  ->comItem(new ItemOrcamento())
  ->comObservacoes('Esta nota fical foi feita com um construtor')
  ->constroi();

print_r($notaFiscal);