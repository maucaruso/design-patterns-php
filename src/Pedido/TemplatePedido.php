<?php

namespace PHP\DesignPattern\Pedido;

class TemplatePedido
{
  private string $nomeCliente;
  private \DateTimeInterface $dataFinalizacao;
  
  public function __construct($nomeCliente, $dataFinalizacao)
  {
    $this->nomeCliente = $nomeCliente;
    $this->dataFinalizacao = $dataFinalizacao;
  }
  
  public function nomeCliente(): string
  {
    return $this->nomeCliente;
  }
  
  public function dataFinalizacao(): \DateTimeInterface
  {
    return $this->dataFinalizacao;
  }
}