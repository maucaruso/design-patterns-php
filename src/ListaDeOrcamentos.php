<?php

namespace PHP\DesignPattern;

use PHP\DesignPattern\EstadosOrcamento\Finalizado;

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
	public function getIterator(): \ArrayIterator
  {
    return new \ArrayIterator($this->orcamentos);
	}
  
  public function orcamentosFinalizados()
  {
    return array_filter($this->orcamentos, function ($orcamento) {
      if (get_class($orcamento->estadoAtual) === Finalizado::class) return $orcamento;
    });
  }
}