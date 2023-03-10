<?php

namespace PHP\DesignPattern\EstadosOrcamento;

use PHP\DesignPattern\Orcamento;

class EmAprovacao extends EstadosOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.05;
  }
  
  public function aprova(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Aprovado();
  }
  
  public function reprova(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Reprovado();
  }
}