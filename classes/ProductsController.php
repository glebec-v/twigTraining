<?php

class ProductsController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::getInstance();
        $result = $twig->render('products.html', ['message' => 'Наши услуги']);
        $fc->setBody($result);
    }
}