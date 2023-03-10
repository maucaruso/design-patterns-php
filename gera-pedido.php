<?php

require_once 'vendor/autoload.php';

use PHP\DesignPattern\GerarPedido;
use PHP\DesignPattern\GerarPedidoHandler;
use PHP\DesignPattern\Orcamento;
use PHP\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);

echo "Cria pedido no banco de dados " . PHP_EOL;
echo "Envia e-mail para o cliente " . PHP_EOL;