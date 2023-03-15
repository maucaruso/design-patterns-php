<?php

use PHP\DesignPattern\Http\CurlHttpAdapter;
use PHP\DesignPattern\Http\ReactPHPHttpAdapter;
use PHP\DesignPattern\Orcamento;
use PHP\DesignPattern\registroOrcamento;

require 'vendor/autoload.php';

$registroOrcamento = new registroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento);
