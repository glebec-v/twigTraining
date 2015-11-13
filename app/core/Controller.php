<?php

abstract class Controller
{
    protected $twig, $data, $fc;

    public function __construct()
    {
        $this->twig = TwigFacade::create();
        $this->data = DataProvider::getInstance();
        $this->fc = FrontController::getInstance();
    }

    abstract function indexAction();
}