<?php
require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/views');
$twig = new Twig_Environment($loader, ['cache' => false]);

echo $twig->render('homepage.html', ['message' => 'Привет чувак!']);