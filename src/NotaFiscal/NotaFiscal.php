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
  
  // public function clonar(): NotaFiscal
  // {
  //   $cloneNotaFiscal = new NotaFiscal();
  //   $cloneNotaFiscal->cnpjEmpresa = $this->cnpjEmpresa;
  //   $cloneNotaFiscal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
  //   $cloneNotaFiscal->itens = $this->itens;
  //   $cloneNotaFiscal->observacoes = $this->observacoes;
  //   $cloneNotaFiscal->dataEmissao = $this->dataEmissao;
  //   $cloneNotaFiscal->valorImpostos = $this->valorImpostos;
    
  //   return $cloneNotaFiscal;
  // }
  
  public function __clone()
  {
    $this->dataEmissao = new \DateTimeImmutable();
  }
}