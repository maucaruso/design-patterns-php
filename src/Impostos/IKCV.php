<?php

use PHP\DesignPattern\Impostos\Imposto;
use PHP\DesignPattern\Impostos\ImpostoCom2Aliquotas;
use PHP\DesignPattern\Orcamento;

class IKCV extends ImpostoCom2Aliquotas
{  
  protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
    return $orcamento->valor > 300 && $orcamento->quantidadeItens > 3;
  }
  
  protected function calculaTaxaMaxima(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.04;
  }
  
  protected function calculaTaxaMinima(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.025;
  }
}
