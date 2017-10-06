<?php

namespace ZapMap\ZapMapLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class ZapMap extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zapmap';
    }
}