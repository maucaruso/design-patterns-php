<?php

namespace PHP\DesignPattern;

/**
 * Summary of ListaDeOrcamentos
 */
class ListaDeOrcamentos implements \IteratorAggregate
{
  /** @var Orcamento[] */
  private array $orcamentos;
  
  public function __construct()
  {
    $this->orcamentos = [];
  }
  
  public function addOrcamento(Orcamento $orcamento)
  {
    $this->orcamentos[] = $orcamento;
  }
  
  public function orcamentos(): array
  {
    return $this->orcamentos;
  }

 /**
  * Summary of getIterator
  * @return \ArrayIterator
  */
	public function getIterator() 
  {
    return new \ArrayIterator($this->orcamentos);
	}
}