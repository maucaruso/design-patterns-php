<?php

require_once 'vendor/autoload.php';

use PHP\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use PHP\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use PHP\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;
use PHP\DesignPattern\GerarPedido;
use PHP\DesignPattern\GerarPedidoHandler;
use PHP\DesignPattern\Orcamento;
use PHP\DesignPattern\Pedido;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoBanco());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());

$gerarPedidoHandler->execute($gerarPedido);

