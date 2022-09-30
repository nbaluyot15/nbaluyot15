<?php

namespace App\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class ApiClientHelper
{   
    public static function getRequest($slug, $link)
    {
        try {
            $apiLink = ''; //it must be in .env files Ex. env('API_LINK')
            $client = new Client();
            $token = '';
            $response = $client->request('GET', $apiLink.$link.$slug,[
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'authorization' => 'bearer '.$token
                ],
                'verify' => false,
                'http_errors' => false
            ]);

            $json = json_decode($response->getBody(),true);
            return $json;

        }catch (ClientException $e){
            return $e;
        }
    }

    public static function postRequest($body, $link)
    {   
        try{
            $apiLink = ''; //it must be in .env files Ex. env('API_LINK')
            $client = new Client();
            $token = '';//Must get in session
            $response = $client->request('POST', $apiLink.$link,[
                'body' => json_encode($body),
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'authorization' => 'bearer '.$token
                ],
                'verify' => false,
                'http_errors' => false
            ]);

            $json = json_decode($response->getBody(),true);
            return $json;
            
        }catch(ClientException $e){
           return $e;
        }
    }
    
}

