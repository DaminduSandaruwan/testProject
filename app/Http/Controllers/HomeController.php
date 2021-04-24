<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($name = null){

        return 'This is from home controller, <br> Name : ' . $name;
    }
}
