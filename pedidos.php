<?php

use PHP\DesignPattern\Orcamento;
use PHP\DesignPattern\Pedido\Pedido;
use PHP\DesignPattern\Pedido\TemplatePedido;

require 'vendor/autoload.php';

$pedidos = [];
$dados = new TemplatePedido(md5((string) rand(1, 10000)), new \DateTimeImmutable());

for ($i = 0; $i < 10000; $i++) {
  $pedido = new Pedido();
  $pedido->template = $dados;
  $pedido->orcamento = new Orcamento();
  
  $pedidos[] = $pedido;
}

echo memory_get_peak_usage();