<?php

namespace PHP\DesignPattern\Log;

class StdoutLogManager extends LogManager
{
	public function criarLogWritter(): LogWritter {
    return new StdoutLogWritter();
	}
}