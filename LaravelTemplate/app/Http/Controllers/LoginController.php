<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class LoginController extends Controller
{
    public function index()
    {   
        try{
            $client = new Client();
            $token = '';

            $response = $client->request('GET', '' ,[
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

    public function about()
    {
    	return view('about');
    }
}
