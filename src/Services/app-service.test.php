<?php

use App\Services\AppService;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;

test('Espero que o retorno seja um json onde deve conter modelos e codigos de marcas', function () {
    
    $httpClient = new HttpClient();
    $appService = new AppService($httpClient->create());

    $brands = $appService->getBrands();
    expect($brands)->toBeArray();
});