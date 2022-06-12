<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

trait ConsumeExternalService
{
    /**
     * Send request to any service
     * @param $method
     * @param $requestUrl
     * @param array $formParams
     * @param array $headers
     * @return string
     */
    public function performRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        
        $client = new Client([
            'base_uri'  =>  $this->baseUri,
        ]);
        //return $headers;
        $headers = ['Authorization' => $this->secret];//
        if(isset($this->secret))
        {
            // $headers['Authorization'] = $this->secret;
            $headers = ['Authorization' => $this->secret];
        }
        $response = $client->request($method, $requestUrl, [
            'form_params' => $formParams,
            'headers'     => ['Authorization' => $this->secret],
        ]);

        
        return $response->getBody()->getContents();
    }
    /**
     * Send request to oauth server
     * @param $method
     * @param $requestUrl
     * @param array $formParams
     * @param array $headers
     * @return string
     */
    public function performOauthRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        
        $client = new Client([
            'base_uri'  =>  $this->baseUri,
        ]);
        
        $response = $client->request($method, $requestUrl, [
            'form_params' => $formParams,
            'headers'     => ['authorization' => $headers['authorization'][0]],
        ]);

        
        return $response->getBody()->getContents();
    }
    
}