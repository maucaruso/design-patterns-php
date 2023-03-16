<?php

namespace PHP\DesignPattern\Relatorio;

use PHP\DesignPattern\Orcamento;

class OrcamentoXml
{
  public function exportar(Orcamento $orcamento): string
  {
    $elementoOrcamento = new \SimpleXMLElement('<orcamento />');
    $elementoOrcamento->addChild('valor', $orcamento->valor);
    $elementoOrcamento->addChild('quantidade_itens', $orcamento->quantidadeItens);
    
    return $elementoOrcamento->asXML();
  }
}