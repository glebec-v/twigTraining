<?php

require __DIR__.'/vendor/autoload.php';

spl_autoload_register(function ($class) {
    include 'app/core/'.$class.'.php';
    include 'app/controllers/'.$class.'.php';
    include 'app/extensions/'.$class.'.php';
    include 'app/models/'.$class.'.php';
});

$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
