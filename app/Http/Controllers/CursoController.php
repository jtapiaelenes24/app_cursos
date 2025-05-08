<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //

    public function index()
    {
        return ('Bienvenidos a la página de cursos');
    }
    public function create()
    {
        return ("Página para crear nuevos cursos");
    }
    public function show($curso)
    {
        return ("Bienvenidos a la página del curso $curso");
    }
}
