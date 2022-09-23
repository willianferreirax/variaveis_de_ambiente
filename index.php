<?php

require __DIR__.'/vendor/autoload.php';

use \App\Commom\Enviroment;

Enviroment::load(__DIR__);

$env = getenv('DB_HOST');

print_r($env);