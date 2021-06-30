<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class FatoraServices{

    private $base_url;
    private $headers;
    private $request_client;
    private $apiKey;

    public function __construct(Client $request_client){

      //  $this->request_client = $request_client;
      
        $this->base_url = env('fatoora_base_url');
        $this->apiKey = env('fatoora_token');

        // $this->headers = [
        //     'content_type' => 'application/json',
        //     'authorization' => 'Bearer'. env('fatoora_token')
        // ];

    }

    private function callAPI($endpointURL, $apiKey, $postFields = [], $requestType = 'POST') {
        

        $curl = curl_init($endpointURL);
        // var_dump($curl);
        // die();
        curl_setopt_array($curl, array(
            CURLOPT_CUSTOMREQUEST  => $requestType,
            CURLOPT_POSTFIELDS     => json_encode($postFields),
            CURLOPT_HTTPHEADER     => array("Authorization: Bearer $apiKey", 'Content-Type: application/json'),
            CURLOPT_RETURNTRANSFER => true,
        ));
    
        $response = curl_exec($curl);
        $curlErr  = curl_error($curl);
    
        curl_close($curl);
    
        if ($curlErr) {
            //Curl is not working in your server
            die("Curl Error: $curlErr");
        }
         return $response;
        $error = $this->handleError($response);
        if ($error) {
            die("Error: $error");
        }
    
        return json_decode($response);
    }

    // private function buildRequest($url, $method, $data = []){

    //     $request = new Request($method, $this->base_url.$url, $this->headers);

    //    // if(! $data)
    //        //return false;

    //     $response = $this->request_client->send($request, [
    //         'json' => $data
    //     ]);

    //     //if($response->getStatusCode() != 200){
    //        // return false;
    //     //};
    //     $response = json_decode($response->getBody(), true);
    //     return $response;
    // }

    public function sendPayment($data){
       // return $test = $this->base_url."/v2/SendPayment";
       //return $test = $this->apiKey;
  
       $response = $this->callAPI($this->base_url."/v2/SendPayment", $this->apiKey, $data);
        return $response;

    }
    public function handleError($response) {

        $json = json_decode($response);
        if (isset($json->IsSuccess) && $json->IsSuccess == true) {
            return null;
        }
    
        //Check for the errors
        if (isset($json->ValidationErrors) || isset($json->FieldsErrors)) {
            $errorsObj = isset($json->ValidationErrors) ? $json->ValidationErrors : $json->FieldsErrors;
            $blogDatas = array_column($errorsObj, 'Error', 'Name');
    
            $error = implode(', ', array_map(function ($k, $v) {
                        return "$k: $v";
                    }, array_keys($blogDatas), array_values($blogDatas)));
        } else if (isset($json->Data->ErrorMessage)) {
            $error = $json->Data->ErrorMessage;
        }
    
        if (empty($error)) {
            $error = (isset($json->Message)) ? $json->Message : (!empty($response) ? $response : 'API key or API URL is not correct');
        }
    
        return $error;
    }
    
  



}