<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Welcome extends Controller
{
    public function index()
    {
        echo "Hello";
    }
}
