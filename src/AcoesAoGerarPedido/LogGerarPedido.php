<?php

namespace PHP\DesignPattern\AcoesAoGerarPedido;

use PHP\DesignPattern\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void
  {
    echo "Gerando log de geração de pedido";
  }
}
