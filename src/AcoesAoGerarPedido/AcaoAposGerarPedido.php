<?php

namespace PHP\DesignPattern\AcoesAoGerarPedido;

use PHP\DesignPattern\Pedido;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
