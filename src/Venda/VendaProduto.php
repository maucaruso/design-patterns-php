<?php

namespace PHP\DesignPattern\Venda;

class VendaProduto extends Venda
{
  private int $pesoProduto;
  
  public function __construct(\DateTimeInterface $dataRealizacao, int $pesoProduto)
  {
    $this->pesoProduto = $pesoProduto;
  }
}