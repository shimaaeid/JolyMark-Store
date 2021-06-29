<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

class FatoraServices{

    private $base_url;
    private $headers;
    private $request_client;


    public function __construct(Client $request_client){

        $this->request_client = $request_client;

        $this->base_url = env('fatoora_base_url');

        $this->headers = [
            'content_type' => 'application/json',
            'autherization' => 'Bearer'. env('fatoora_token')
        ];

    }

    private function buildRequest($url, $method, $body = []){

        $request = new Request($method, $this->base_url.$url, $this->headers);

        if(! $body)
           return false;

        $response = $this->request_client->send($request, [
            'json' => $body
        ]);

    }

    public function sendPayment($data){

        $requestData = $this->parsePaymentData();
        $response = $this->buildRequest('v2/SendPayment', 'POST', $requestData);

        if($response){
            $this->saveTransactionPayment();
        }

        return $response;

    }
  



}