<?php

namespace PHP\DesignPattern;

use PHP\DesignPattern\EstadosOrcamento\Finalizado;
use PHP\DesignPattern\Http\HttpAdapter;

class registroOrcamento
{
  private HttpAdapter $http;
  
  public function __construct(HttpAdapter $http)
  {
    $this->$http = $http;
  }
  
  public function registrar(Orcamento $orcamento): void
  {
    if (!$orcamento->estadoAtual instanceof Finalizado) {
      throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API');
    }
    
    $this->http->post('http://api.registrar.orcamento', [
      'valor' => $orcamento->valor,
      'quantidadeItens' => $orcamento->quantidadeItens
    ]);
  }
}