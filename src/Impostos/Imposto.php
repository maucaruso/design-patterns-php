<?php

namespace PHP\DesignPattern\Impostos;

use PHP\DesignPattern\Orcamento;

interface Imposto
{
  public function calculaImposto(Orcamento $orcamento): float; 
}