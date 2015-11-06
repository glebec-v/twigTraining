<?php

class TwigFacade
{
    static $instance;

    public static function create()
    {
        if (!(self::$instance instanceof self)){
            $loader = new Twig_Loader_Filesystem([
                __DIR__.'/../views',
                __DIR__.'/../views/layouts',
                __DIR__.'/../views/macro'
            ]);
            self::$instance = new Twig_Environment($loader, ['cache' => false]);
            self::$instance->addExtension(new JumpWorks_Extention());
        }
        return self::$instance;
    }
}