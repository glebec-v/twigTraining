<?php

class JumpWorks_Extention extends Twig_Extension
{
    public function getName()
    {
        return 'JumpWorks';
    }

    public function getGlobals()
    {
        return [
            'config' => [
                'title' => 'Origin Jumpworks',
                'contacts' => [
                    'comm' => '(56123) 456 7890 355 / 456 7891 478',
                    'email' => 'info@originjumpworks.com',
                    'address' => '3245 N 467th Street'.'<br/>'.'Terra Prime'.'<br/>'.'Terra'
                ]
            ]
        ];
    }
}