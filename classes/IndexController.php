<?php

class IndexController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::create();
        $data = DataProvider::getInstance();
        $content = $data->getHome();
        $result = $twig->render('homepage.twig', ['content' => $content]);
        $fc->setBody($result);
    }
}