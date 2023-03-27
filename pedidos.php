<?php

use PHP\DesignPattern\Orcamento;
use PHP\DesignPattern\Pedido\CriadorDePedido;

require 'vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();

for ($i = 0; $i < 10000; $i++) {
  $orcamento = new Orcamento();
  $pedido = $criadorPedido->criaPedido('Vinicius Dias', date('Y-m-d'), $orcamento);
  
  $pedidos[] = $pedido;
}

echo memory_get_peak_usage();