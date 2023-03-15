<?php

namespace PHP\DesignPattern;

class registroOrcamento
{
  public function registrar(Orcamento $orcamento): void
  {
    $postParameter = array(
      'orcamento' => $orcamento,
      'dataOrcamento' => '2023-03-15',
    );
    
    $curlHandle = curl_init('http://domain-name/endpoint-path');
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    
    $curlResponse = curl_exec($curlHandle);
    curl_close($curlHandle);
  }
}