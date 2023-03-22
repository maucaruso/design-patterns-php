<?php

namespace PHP\DesignPattern;

class ItemOrcamento implements Orcavel
{
  public float $valor;

	public function valor(): float 
  {
    sleep(1); // tendo de demora ao consultar uma api externa
    return $this->valor;
	}
}
