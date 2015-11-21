<?php

namespace app\controllers;

use app\core\Controller;
use app\core\IController;

class AboutController extends Controller implements IController
{

    public function indexAction()
    {
        $content = $this->data->getAbout();
        $result = $this->twig->render('about.twig', ['content' => $content]);
        $this->fc->setBody($result);
    }
}