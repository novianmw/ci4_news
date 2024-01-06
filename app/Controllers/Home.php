<?php

namespace App\Controllers;
use PhpParser\Parser\Php7;

class Home extends BaseController // controller home
{
    public function index() //methodnya index
    {
        return view('welcome_message');
    }
    public function coba() //methodnya index
    {
        echo "COBA COBA ";
    }
}

