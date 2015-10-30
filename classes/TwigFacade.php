<?php

class TwigFacade
{
    static $instance;

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)){
            $loader = new Twig_Loader_Filesystem(__DIR__.'/../views');
            self::$instance = new Twig_Environment($loader, ['cache' => false]);
        }
        return self::$instance;
    }

    protected function __construct(){}
}