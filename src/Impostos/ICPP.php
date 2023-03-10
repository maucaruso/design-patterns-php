<?php

namespace PHP\DesignPattern\Impostos;

class ICPP implements Imposto
{
	public function calculaImposto(\PHP\DesignPattern\Orcamento $orcamento): float 
  {
    if ($orcamento->valor > 500) {
      return $orcamento->valor * 0.03;
    }
    
    return $orcamento->valor * 0.02;
	}
}