<?php

use PHP\DesignPattern\Impostos\Imposto;

class IKCV implements Imposto
{
	public function calculaImposto(PHP\DesignPattern\Orcamento $orcamento): float 
  {
    if ($orcamento->valor > 300 && $orcamento->quantidadeItens > 3) {
      return $orcamento->valor * 0.04;
    }
    
    return $orcamento->valor * 0.025;
  }
}
