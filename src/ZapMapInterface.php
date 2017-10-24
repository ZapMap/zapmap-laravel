<?php

namespace ZapMap\ZapMapLaravel;

interface ZapMapInterface{

    public function call($method, $uri, $data=[]);

}
