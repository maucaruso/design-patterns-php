<?php

namespace PHP\DesignPattern\Impostos;

use PHP\DesignPattern\Impostos\Imposto;
use PHP\DesignPattern\Orcamento;

class ISS implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}