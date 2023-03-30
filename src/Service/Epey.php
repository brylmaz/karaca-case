<?php

namespace User\KaracaCase\Service;

use User\KaracaCase\Interfaces\IPlatform;
use User\KaracaCase\Traits\Singleton;

class Epey implements IPlatform
{
    use Singleton;

    public function convertProductsToXmlFeed($products){
        $xmlService = Xml::Instance();
        return $xmlService->setXmlTemplate([
            "product_name"=>"{name}",
            "prices"=>[
                "ozel_isimlendirilmis"=>[
                    "sonsuz"=>[
                        "price"=>"{price}"
                    ]
                ]
            ],
            "category"=>"{category}"
        ],$products);
    }
}