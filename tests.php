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

var_dump($server->isValidNumber('12345'));
var_dump($server->isValidNumber('asdfasdf14141'));