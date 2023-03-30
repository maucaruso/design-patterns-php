<?php

namespace PHP\DesignPattern\NotaFiscal;

class NotaFiscal
{
  public string $cnpjEmpresa;
  public string $razaoSocialEmpresa;
  public array $itens;
  public string $observacoes;
  public \DateTimeInterface $dataEmissao;
  public float $valorImpostos;
  
  public function __construct(
    string $cnpjEmpresa,
    string $razaoSocialEmpresa,
    array $itens,
    string $observacoes,
    \DateTimeInterface $dataEmissao,
    float $valorImpostos
  )
  {
    $this->cnpjEmpresa = $cnpjEmpresa;
    $this->razaoSocialEmpresa = $razaoSocialEmpresa;
    $this->itens = $itens;
    $this->observacoes = $observacoes;
    $this->dataEmissao = $dataEmissao;
    $this->valorImpostos = $valorImpostos;
  }
  
  public function valor(): float
  {
    return 0;
  }
}

// O Problema:
new NotaFiscal('', '', [], '', new \DateTimeInterface(), '', '', '', '');