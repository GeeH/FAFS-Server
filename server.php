<?php
// Include autoloading
require_once('vendor/autoload.php');

// Include config
/** @var array $config  */
$config = require('config.php');

// Create logger
$writer = new \Zend\Log\Writer\Stream('php://output');
$logger = new \Zend\Log\Logger();
$logger->addWriter($writer);

// Create instance of server
$server = new \FAFSServer\Service\FAFSServer($config, $logger);

if(!isset($argv) || !isset($argv[1])) {
   $argv[1] = '';
}

switch($argv[1]) {
    case 'start':
        $result = $server->start();
        break;
    default:
        $result = 'Help text';
        break;
}

echo "$result\r\n";
