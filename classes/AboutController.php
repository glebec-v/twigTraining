<?php

class AboutController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::getInstance();
        $result = $twig->render('about.html', ['message' => 'Информация о нас']);
        $fc->setBody($result);
    }
}