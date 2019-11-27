<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Crush\Http\Contracts\UrlBuilder;
use Crush\Http\Contracts\Http;

class TestController extends Controller
{

    protected $http;
    protected $urlBuilder;

    public function __construct(Http $http, UrlBuilder $urlBuilder) {
        $this->http = $http;
        $this->urlBuilder = $urlBuilder;
        $this->urlBuilder->setBaseUrl(url('/') . '/api/v1/');
        $this->urlBuilder->addParam('bacon', 'delicious');
    }

    public function getTest() {
        $url = $this->urlBuilder
            ->path('test')
            ->params(['harry' => 'potter'])
            ->build();

        $data = $this->http->get('http://45.56.74.8:3000/api/v1/fpi-bets/14');

        return $data;
    }

}
