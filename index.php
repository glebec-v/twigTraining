<?php

require __DIR__.'/vendor/autoload.php';

spl_autoload_register(function ($class) {
    include 'classes/'.$class.'.php';
});

$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
