<?php

namespace User\KaracaCase\Model;

use User\KaracaCase\Core\Model;
use User\KaracaCase\Traits\Singleton;

class Product extends Model
{
    use Singleton;

    public function get(){
        return json_decode($this->getPublicFile('products.json'));
    }
}