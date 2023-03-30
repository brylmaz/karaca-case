<?php

namespace User\KaracaCase\Controller;

use User\KaracaCase\Core\Controller;
use User\KaracaCase\Factory\PlatformFactory;

class Product extends Controller
{
    public function getProducts($params){
        $productModel = \User\KaracaCase\Model\Product::Instance();
        $products = $productModel->get();

        $platform = PlatformFactory::make($params['platform']);

        $result = $platform->convertProductsToXmlFeed($products);

        $this->setContentType()->setData($result)->sendResponse();
    }

}