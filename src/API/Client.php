<?php

namespace ZapMap\ZapMapLaravel\API;

use ZapMap\ZapMapLaravel\API\Exceptions\ClientException;
use ZapMap\ZapMapLaravel\API\Exceptions\InvalidKeyException;

class Client{

    private $client;

    public function call($method, $uri, $data = []){

        $this->client = new \GuzzleHttp\Client([
            'base_uri' => config('zapmap.baseURI'),
        ]);

        $apiKey = config('zapmap.apiKey');
        if(empty($apiKey)){
            throw new InvalidKeyException('Please enter your ZapMap API Key in .env');
        }

        $requestOptions = [
            'headers' => [
                'Authorization' => 'Bearer '.$apiKey,
                'Accept' => 'application/json',
            ],
        ];
        if($method == 'GET'){
            $requestOptions['query'] = $data;
        }else{
            $requestOptions['form_params'] = $data;
        }
        return $this->handleRequest($method, $uri, $requestOptions)->getContents();
    }

    private function handleRequest($method, $uri, $requestOptions){
        try {
            $request = $this->client->request($method, $uri, $requestOptions);
            return $request->getBody();
        } catch (\GuzzleHttp\Exception\ClientException $error){
            switch ($error->getResponse()->getStatusCode()) {
                case '401':
                    throw new InvalidKeyException('Unable to authenticate, please verify your ZapMap API key');
                    break;
                default:
                    throw new ClientException($error->getMessage().'|'.$error->getResponse()->getStatusCode());
                    break;
            }
        } catch (\ErrorException $error){
            throw new ClientException($error->getMessage());
        }
        return null;
    }

}
