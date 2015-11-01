<?php

class IndexController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::getInstance();
        $data = DataProvider::getInstance();
        $content = $data->getHome();
        $result = $twig->render('homepage.html', ['content' => $content]);
        $fc->setBody($result);
    }
}