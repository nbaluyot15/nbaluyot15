<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    try{
        $client = new Client();
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1bmlxdWVfbmFtZSI6ImlSM20xdEFwMUMwcjN2NGMwbnRyb2xsM3IiLCJuYmYiOjE2NjM5MTc1OTIsImV4cCI6MTY2MzkyNDc5MiwiaWF0IjoxNjYzOTE3NTkyfQ.D2P8KNrFf1mPCcOYdN6ONnl7K8MUaE8ZFSkeNMFVeco';

        $response = $client->request('GET', 'http://192.168.225.184:8081/api/Transaction/GetComplianceLimit?ClientID=001300131103375133&AgentID=CAL100' ,[
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
});
