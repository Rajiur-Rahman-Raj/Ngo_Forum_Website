<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminregisterController extends Controller
{
    function adminregister(){
      return view('auth/register');
    }
}
