<?php

namespace PHP\DesignPattern\Venda;

use PHP\DesignPattern\Impostos\Imposto;

interface VendaFactory
{
  public function criarVenda(): Venda;
  public function imposto(): Imposto;
}