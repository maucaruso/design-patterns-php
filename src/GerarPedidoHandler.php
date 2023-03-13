<?php

namespace PHP\DesignPattern;

use PHP\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use PHP\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use PHP\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use PHP\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
  /** @var AcaoAposGerarPedido[] */
  private array $acoesAposGerarPedido = [];
  
  public function __construct()
  {
  }
  
  public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
  {
    $this->acoesAposGerarPedido[] = $acao;
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
    
    foreach ($this->acoesAposGerarPedido as $acao) {
      $acao->executaAcao($pedido);
    }
  }
}