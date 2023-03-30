<?php

namespace User\KaracaCase\Service;

use User\KaracaCase\Interfaces\IPlatform;
use User\KaracaCase\Traits\Singleton;

class Akakce implements IPlatform
{
    use Singleton;

    public function convertProductsToXmlFeed($products){
        $xmlService = Xml::Instance();
        return $xmlService->setXmlTemplate([
            "product_name"=>"{name}",
            "prices"=>'{price}',
            "category"=>"{category}"
        ],$products);
    }
}