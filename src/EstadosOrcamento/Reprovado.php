<?php

namespace PHP\DesignPattern\EstadosOrcamento;

use PHP\DesignPattern\Orcamento;

class Reprovado extends EstadosOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new \DomainException('Um orçamento reprovado não pode receber desconto');
  }
  
  public function finaliza(Orcamento $orcamento)
  {
    $orcamento->estadoAtual = new Finalizado();
  }
}