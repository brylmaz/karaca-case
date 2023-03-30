<?php

namespace User\KaracaCase\Factory;

use User\KaracaCase\Interfaces\IPlatform;
use User\KaracaCase\Service\Akakce;
use User\KaracaCase\Service\Cimri;
use User\KaracaCase\Service\Epey;

class PlatformFactory
{
    /**
     * @throws \Exception
     */
    public static function make($platform): IPlatform{
        switch ($platform){
            case 'akakce':
                return Akakce::Instance();
            case 'cimri':
                return Cimri::Instance();
            case 'epey':
                return Epey::Instance();
        }
        throw new \Exception('Platform Not Found');
    }

}