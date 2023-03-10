<?php

namespace PHP\DesignPattern;

class GerarPedido
{
  private float $valorOrcamento;
  private int $numeroDeItens;
  private string $nomeCliente;
  
  public function __construct(
    float $valorOrcamento,
    int $numeroDeItens,
    string $nomeCliente
  )
  {
    $this->valorOrcamento = $valorOrcamento;
    $this->numeroDeItens = $numeroDeItens;
    $this->nomeCliente = $nomeCliente;
  }
  
  public function getValorOrcamento(): float
  {
    return $this->valorOrcamento;
  }
  
  public function getNomeCliente(): string
  {
    return $this->nomeCliente;  
  }
  
  public function getNumeroDeItens(): int
  {
    return $this->numeroDeItens;
  }
}