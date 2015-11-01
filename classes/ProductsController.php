<?php

class ProductsController implements IController
{
    public function indexAction()
    {
        $fc = FrontController::getInstance();
        $twig = TwigFacade::getInstance();
        $data = DataProvider::getInstance();
        $storage = $data->getProducts();
        $result = $twig->render('products.html', ['storage' => $storage]);
        $fc->setBody($result);
    }
}