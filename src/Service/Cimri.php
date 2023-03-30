<?php

namespace User\KaracaCase\Service;

use User\KaracaCase\Interfaces\IPlatform;
use User\KaracaCase\Traits\Singleton;

class Cimri implements IPlatform
{
    use Singleton;

    public function convertProductsToXmlFeed($products){
        $xmlService = Xml::Instance();
        return $xmlService->setXmlTemplate([
            "product_name"=>"{name}",
            "prices"=>[
                "discounted_price"=>"{price}"
            ],
            "category"=>"{category}"
        ],$products);
    }
}