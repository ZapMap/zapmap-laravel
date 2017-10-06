<?php

namespace ZapMap\ZapMapLaravel;

class ZapMap{

    public function call($method, $uri, $data=[]){
        $client = new \ZapMap\ZapMapLaravel\API\Client();
        $response = $client->call($method, $uri, $data);
        return json_decode($response);
    }

}