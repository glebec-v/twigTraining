<?php

class JumpWorks_Extension extends Twig_Extension
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

    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('currencyExchange', function($price, $rate){
                return $price / $rate;
            })
        ];

    }

    /**
     * @return коллекцию товаров, где хотя-бы один тэг у каждого товара в коллекции
     * соответствует хотя-бы одному тегу исходного товара (пересечение множеств тэгов)
     */
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('getByTags', function($tags, SplObjectStorage $storage){
                $outStorage = new SplObjectStorage();
                foreach ($tags as $tag){
                    $storage->rewind();
                    while ($storage->valid()){
                        foreach ($storage->current()->tags as $currentItemTag) {
                            if ($currentItemTag == $tag){
                                $outStorage->attach($storage->current());
                            }
                        }
                        $storage->next();
                    }
                }
                return $outStorage;
            })
        ];
    }
}