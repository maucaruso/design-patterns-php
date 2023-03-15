<?php

namespace PHP\DesignPattern\Http;

interface HttpAdapter
{
  public function post(string $url, array $data = []): void;
}