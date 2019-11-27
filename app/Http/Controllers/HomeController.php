<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    protected $http;
    protected $urlBuilder;

    public function __construct() {

    }

    public function getHome() {
        return view('home');
    }

}
