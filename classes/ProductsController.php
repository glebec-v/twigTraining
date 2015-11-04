<?php

class ProductsController implements IController
{
    protected $twig, $data, $fc;

    public function __construct()
    {
        $this->twig = TwigFacade::create();
        $this->data = DataProvider::getInstance();
        $this->fc = FrontController::getInstance();
    }

    public function indexAction()
    {
        $storage = $this->data->getProducts();
        $result = $this->twig->render('products.twig', ['storage' => $storage]);
        $this->fc->setBody($result);
    }

    public function showAction()
    {
        $params = $this->fc->getParams();
        if (count($params) == 1 ) {
            $id = (int)$params['id'];
            $item = $this->data->getItem($id);
        }else{
            $item = null;
        }
        $result = $this->twig->render('products_show_by_id.twig', ['item' => $item]);
        $this->fc->setBody($result);
    }
}