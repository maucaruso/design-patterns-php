<?php

namespace PHP\DesignPattern;

class PdoConnection extends \PDO
{
  private static ?self $instance = null;
  
  private function __construct($dns, $username = null, $password = null, $options = null)
  {
    parent::__construct($dns, $username, $password, $options);
  }
  
  public static function getInstance($dns, $username = null, $password = null, $options = null): self
  {
    if (is_null(self::$instance)) {
      self::$instance = new static($dns, $username, $password, $options);
    }
    
    return self::$instance;
  }
}