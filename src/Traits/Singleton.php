<?php

namespace User\KaracaCase\Traits;

trait Singleton
{
    public static function Instance() : mixed
    {
        static $instance = null;
        if (is_null($instance)) {
            $instance = new self();
        }
        return $instance;
    }
}