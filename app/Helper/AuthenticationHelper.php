<?php

namespace App\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class AuthenticationHelper
{   
    public static function getToken()
	{
		$client = new Client();
        $response = $client->request('POST', env('API_LINK').'your api link here',[
            'body' => json_encode([
                "Token" => env('YOUR_API_TOKEN_HERE'),
            ]),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
            'verify' => false,
            'http_errors' => false
        ]);

        $json = json_decode($response->getBody(),true);
        return $json['result']['token'];
	}
}   

