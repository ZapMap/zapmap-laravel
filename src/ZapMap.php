<?php

namespace ZapMap\ZapMapLaravel;

use ZapMap\ZapMapLaravel\API\Exceptions\ClientException;
use ZapMap\ZapMapLaravel\API\Exceptions\InvalidKeyException;

class ZapMap implements ZapMapInterface {

    public function call($method, $uri, $data=[]){
        $client = new \ZapMap\ZapMapLaravel\API\Client();
        try{
            $response = $client->call($method, $uri, $data);
            return json_decode($response);
        }catch (ClientException $exception){
            return null;
        }catch (InvalidKeyException $exception){
            return null;
        }
        return null;
    }

}
