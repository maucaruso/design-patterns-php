<?php

use PHP\DesignPattern\Venda\VendaProdutoFactory;
use PHP\DesignPattern\Venda\VendaServicoFactory;

require 'vendor/autoload.php';

// $fabricaVenda = new VendaServicoFactory('Vinicius Dias');
$fabricaVenda = new VendaProdutoFactory(100);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);
