<?php

namespace app\controllers;

use app\core\Controller;
use app\core\IController;


class IndexController extends Controller implements IController
{
    public function indexAction()
    {
        $content = $this->data->getHome();
        $result = $this->twig->render('homepage.twig', ['content' => $content]);
        $this->fc->setBody($result);
    }
}