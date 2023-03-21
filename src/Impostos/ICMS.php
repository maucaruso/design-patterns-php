<?php

namespace PHP\DesignPattern\Impostos;

use PHP\DesignPattern\Impostos\Imposto;
use PHP\DesignPattern\Orcamento;

class ICMS extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.1;
  }
}