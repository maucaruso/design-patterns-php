<?php

namespace PHP\DesignPattern;

use PHP\DesignPattern\Impostos\Imposto;

class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, Imposto $imposto): float
  {
    return $imposto->calculaImposto($orcamento);
  }
}