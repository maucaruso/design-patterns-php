<?php

namespace PHP\DesignPattern\Venda;

use DateTime;

abstract class Venda
{
  public \DateTimeInterface $dataRealizacao;
  
  public function __construct(\DateTimeInterface $dataRealizacao)
  {
    $this->dataRealizacao = $dataRealizacao;
  }
}