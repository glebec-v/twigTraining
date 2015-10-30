<?php

class IndexController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::getInstance();
        $result = $twig->render('homepage.html', ['message' => 'Привет чувак!']);
        $fc->setBody($result);
    }
}