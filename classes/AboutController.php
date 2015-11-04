<?php

class AboutController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::getInstance();
        $data = DataProvider::getInstance();
        $content = $data->getAbout();
        $result = $twig->render('about.twig', ['content' => $content]);
        $fc->setBody($result);
    }
}