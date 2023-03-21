<?php

namespace PHP\DesignPattern\Impostos;

use PHP\DesignPattern\Impostos\Imposto;
use PHP\DesignPattern\Orcamento;

class ISS extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}