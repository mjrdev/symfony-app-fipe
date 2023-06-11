<?php
namespace App\Services;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AppService 
{
    public function __construct(private readonly HttpClientInterface $httpClient) {}
    public function getBrands()
    {
        $brands = $this->httpClient->request('GET', 'https://parallelum.com.br/fipe/api/v1/carros/marcas');
        $brands = $brands->toArray();
        return $brands;
    }
}