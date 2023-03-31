<?php

namespace PHP\DesignPattern\NotaFiscal;

use PHP\DesignPattern\ItemOrcamento;

class NotaFiscal
{
  public string $cnpjEmpresa;
  public string $razaoSocialEmpresa;
  public array $itens;
  public string $observacoes;
  public \DateTimeInterface $dataEmissao;
  public float $valorImpostos;
  
  public function valor(): float
  {
    return array_reduce(
      $this->itens, 
      function (float $valorAculumado, ItemOrcamento $itemAtual) {
        return $valorAculumado + $itemAtual->valor;
      },
      0
    );
  }
}