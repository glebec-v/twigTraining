<?php

require __DIR__.'/vendor/autoload.php';

spl_autoload_register(function ($class) {
    include 'classes/'.$class.'.php';
});

$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
$twig = new Twig_Environment($loader, ['cache' => false]);

$front = FrontController::getInstance();

echo $twig->render('homepage.html', ['message' => 'Привет чувак!']);