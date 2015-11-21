<?php

use app\core\FrontController;

require __DIR__.'/vendor/autoload.php';

//$a = new Test();
$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
