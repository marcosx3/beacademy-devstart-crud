<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class MainController extends Controller
{
  function login(){
        return View('auth.login');
  }

  function register(){
    return view('auth.register');
  }
}
