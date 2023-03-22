<?php

namespace PHP\DesignPattern;
use PHP\DesignPattern\Descontos\DescontoMaisDe500Reais;
use PHP\DesignPattern\Descontos\DescontoMaisDe5Itens;
use PHP\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento): float
  {
    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMaisDe500Reais(
        new SemDesconto()
      )
    );
    
    $descontoCalculado = $cadeiaDeDescontos->calculaDesconto(($orcamento));
    $logDesconto = new LogDesconto();
    $logDesconto->informar($descontoCalculado);
    
    return $descontoCalculado;
  }
}
