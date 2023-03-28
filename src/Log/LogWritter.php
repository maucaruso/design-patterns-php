<?php

namespace PHP\DesignPattern\Log;

interface LogWritter
{
  public function escreve(string $mensagemFormatada): void;
}