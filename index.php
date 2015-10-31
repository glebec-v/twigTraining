<?php
require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
    __DIR__.'/views/layouts'
]);
$twig = new Twig_Environment($loader, ['cache' => false]);


$request = $_SERVER['REQUEST_URI'];
switch($request){
    case '/':
    case '/home':
        echo $twig->render('homepage.html', ['message' => 'Привет чувак!']);
        break;
    case '/about':
        echo $twig->render('about.html', ['message' => 'О нас']);
        break;
    case '/products':
        echo $twig->render('products.html',
            ['items' => [
                '300i' => 'Text about 300i',
                '315p' => 'Explorer 315p',
                '325a' => 'Luxury interceptor',
                '350r' => 'Racing',
                'M50' => 'Fastest interceptor',
                '890Jump' => 'Luxury luxury luxury'
        ]]);
}

