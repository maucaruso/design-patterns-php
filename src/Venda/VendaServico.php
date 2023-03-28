<?php

namespace PHP\DesignPattern\Venda;

class VendaServico extends Venda
{
  private string $nomePrestador;
  
  public function __construct(\DateTimeInterface $dataRealizacao, string $nomePrestador)
  {
    parent::__construct($dataRealizacao);
    $this->nomePrestador = $nomePrestador;
  }
  
  // Devemos aplicar um imposto ISS sobre a venda
}