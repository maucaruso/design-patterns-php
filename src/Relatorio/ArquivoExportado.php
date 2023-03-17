<?php

namespace PHP\DesignPattern\Relatorio;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}