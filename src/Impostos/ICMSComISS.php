<?php

namespace PHP\DesignPattern\Impostos;

use PHP\DesignPattern\Orcamento;

class ICMSComISS implements Imposto
{
	public function calculaImposto(Orcamento $orcamento): float
  {
    return (new ICMS())->calculaImposto($orcamento) + (new ISS())->calculaImposto($orcamento);
	}
}
