<?php

namespace ZapMap\ZapMapLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use ZapMap\ZapMapLaravel\Support\Testing\Fakes\ZapMapFake;

class ZapMap extends Facade
{

    public static function fake()
    {
        static::swap(new ZapMapFake);
    }

    protected static function getFacadeAccessor()
    {
        return 'zapmap';
    }
}
