<?php

class ProductsController extends Controller implements IController
{
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
        $storage = $this->data->getProducts();
        $result = $this->twig->render('products_show_by_id.twig', [
            'item' => $item,
            'storage' => $storage
        ]);
        $this->fc->setBody($result);
    }
}