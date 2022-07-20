<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function login()
    {
        return View('auth.login');
    }

    function register()
    {
        return view('auth.register');
    }
}
