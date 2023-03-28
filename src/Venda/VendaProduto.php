<?php

namespace PHP\DesignPattern\Venda;

class VendaProduto extends Venda
{
  private int $pesoProduto;
  
  public function __construct(\DateTimeInterface $dataRealizacao, int $pesoProduto)
  {
    $this->pesoProduto = $pesoProduto;
  }
  
  // Devemos aplicar um imposto ICMS sobre a venda
}