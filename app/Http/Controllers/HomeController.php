<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function __invoke()
    {
        // Devuelve el archivo que esta dentro de la carpeta views (home.php)
        return view('home');
    }
}
