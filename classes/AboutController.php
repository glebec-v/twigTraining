<?php

class AboutController extends Controller implements IController
{

    public function indexAction()
    {
        $content = $this->data->getAbout();
        $result = $this->twig->render('about.twig', ['content' => $content]);
        $this->fc->setBody($result);
    }
}