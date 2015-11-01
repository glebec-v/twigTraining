<?php
require __DIR__.'/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem([
    __DIR__.'/views',
    __DIR__.'/views/layouts'
]);
$twig = new Twig_Environment($loader, ['cache' => false]);
$storage = new SplObjectStorage();

class Ship extends stdClass{}

$ship_300i = new Ship();
$ship_315p = new Ship();
$ship_325a = new Ship();
$ship_M50 = new Ship();
$ship_890J = new Ship();

$ship_300i->name = '300i';
$ship_300i->type = 'common';
$ship_300i->image = '/views/pics/300i_beauty_visual.jpg';
$ship_300i->description = 'The 300i touring model is the premiere spacecraft hull on the market today. A true
jack-of-all-trades, the 300i is capable of making any role its own and doing so with the class and sophistication
 expected of an ORIGIN design. All models feature Gorgon Defender shields and A&R Omnisky VI cannon standard.';
$ship_315p->name = '315p';
$ship_315p->type = 'exploration';
$ship_315p->image = '/views/pics/315p_flight_visual.jpg';
$ship_315p->description = 'Exploration is man’s highest calling. Prepare to chart distant horizons with man’s most sophisticated piece of technology,
the ORIGIN 315p. Featuring a more robust power plant and a custom scanning package, exclusively designed by Chimera
Communications, the 315p is designed for the pilot who wants to go further, to see things that few have seen.';
$ship_325a->name = '325a';
$ship_325a->type = 'interdiction';
$ship_325a->image = '/views/pics/325a_front-Right_visual.jpg';
$ship_325a->description = 'It’s a dangerous universe out there. Be the arbiter of your fate with the combat-enhanced ORIGIN 325a. Just because it’s a rough
galaxy doesn’t mean you need to sacrifice your comfort: the 325a can come out on top in any dogfight. The 325a features an
advanced weapon payload as well as a custom targeting system designed especially for the 325a by WillsOp.';
$ship_M50->name = 'M50';
$ship_M50->type = 'racing, interceptor';
$ship_M50->image = '/views/pics/M50_comp52.jpg';
$ship_M50->description = 'If you want to get from point A to point B as quickly as possible and with as much style as
 possible then ORIGIN\'s M50 is for you. Featuring supercharged engines that counter a tiny weapons loadout, the M50 is
  a ship for going FAST.';
$ship_890J->name = '890 Jump';
$ship_890J->type = 'Luxury touring';
$ship_890J->image = '/views/pics/890_Beautyshot-World_v01_NF_140925.jpg';
$ship_890J->description = 'With an elegant, sleek exterior that belies its spacious interior, the 890 Jump is a true
engineering marvel; crafted to impress from every angle by combining a unique, innovative design with the finest
 materials and the most advanced technology. The result is a vessel that is in a class all of its own, a masterpiece
 worthy of the name ORIGIN.';

$storage->attach($ship_300i);
$storage->attach($ship_315p);
$storage->attach($ship_325a);
$storage->attach($ship_M50);
$storage->attach($ship_890J);

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
            ['storage' => $storage]);
}
