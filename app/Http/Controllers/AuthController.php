<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{

    public function getLogin() {
        return view('auth.login');
    }

}
