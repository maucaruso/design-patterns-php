<?php

use PHP\DesignPattern\Log\{StdoutLogManager, FileLogManager};

require 'vendor/autoload.php';

$logManager  = new FileLogManager(__DIR__ . '/log');
$logManager->log('info', 'testando log manager');