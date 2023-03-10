<?php

namespace PHP\DesignPattern;

class GerarPedidoHandler
{
  public function __construct()
  { 
  }
  
  public function execute(GerarPedido $gerarPedido)
  {
    $orcamento = new Orcamento();
    $orcamento->quantidadeItens = $gerarPedido->getNumeroDeItens();
    $orcamento->valor = $gerarPedido->getValorOrcamento();

    $pedido = new Pedido();
    $pedido->dataFinalizacao = new \DateTimeImmutable();
    $pedido->nomeCliente = $gerarPedido->getNomeCliente();
    $pedido->orcamento = $orcamento;
  }
}