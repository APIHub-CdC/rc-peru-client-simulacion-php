<?php

namespace rc\simulacion\pe\Client;

use \rc\simulacion\pe\Client\Configuration;
use \rc\simulacion\pe\Client\ApiException;
use \rc\simulacion\pe\Client\ObjectSerializer;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    

    public function setUp()
    {
        $handler = \GuzzleHttp\HandlerStack::create();
        $config = new \rc\simulacion\pe\Client\Configuration();
        $config->setHost('the_url');

        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \rc\simulacion\pe\Client\Api\ReporteCreditoPeruSimulacionApi($client, $config);
        $this->x_api_key = "your_api_key";
    } 
    
    public function testGetRC()
    {

        $request = new \rc\simulacion\pe\Client\Model\Peticion();

        $request->setFolio("10000500");
        $request->setNumeroDocumento("67544489");
        $request->setTipoDocumento("1");

        try {
            $result = $this->apiInstance->getRC($this->x_api_key, $request);
            
            if($this->apiInstance->getStatusCode() == 200){
                print_r($result);
            }
        } catch (ApiException $e) {

            if($e->getCode() !== 204){
                echo ' code. Exception when calling ApiTest->getRC: ', $e->getResponseBody(), PHP_EOL;
            }
        }
        $this->assertTrue($this->apiInstance->getStatusCode() == 200);

    }
}
