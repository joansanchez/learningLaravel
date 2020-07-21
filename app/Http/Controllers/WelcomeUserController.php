<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nickname = null)
    {
        $name = ucfirst($name);
        if ($nickname) {
            return "Hola usuario {$name}, tu nickname es {$nickname}";
        } else {
            return "Hola usuario {$name}";
        }
    }
}
