<?php

namespace ZapMap\ZapMapLaravel\Support\Testing\Fakes;

use ZapMap\ZapMapLaravel\ZapMapInterface;

class ZapMapFake implements ZapMapInterface
{
    public function call($method, $uri, $data=[]){
        return null;
    }
}
