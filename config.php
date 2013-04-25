<?php
return array(
    'ipAddress' => '127.0.0.1',
    'port' => '6610',
    'maxLength' => '1024',
    'db' => array(
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=FAFS;host=127.0.0.1',
        'username' => 'changeme',
        'password' => 'changeme',
        'driver_options' => array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    )
);