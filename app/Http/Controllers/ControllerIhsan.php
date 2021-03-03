<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerIhsan extends Controller
{
    public function show($name)
    {
        return "Hello " . $name . "....!";
    }
}
