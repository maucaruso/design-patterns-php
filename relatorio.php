<?php

require 'vendor/autoload.php';

use PHP\DesignPattern\Orcamento;
use PHP\DesignPattern\Pedido;
use PHP\DesignPattern\Relatorio\OrcamentoExportado;
use PHP\DesignPattern\Relatorio\PedidoExportado;
use PHP\DesignPattern\Relatorio\ArquivoXmlExportado;
use PHP\DesignPattern\Relatorio\ArquivoZipExportado;

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoEmXML = new ArquivoXmlExportado('orcamento');

echo $orcamentoExportadoEmXML->salvar($orcamentoExportado);