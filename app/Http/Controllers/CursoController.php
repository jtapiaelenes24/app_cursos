<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //

    public function index()
    {
        // Guardamos todos los registros de la tabla cursos en la variable $cursos 
        // y los mandamos a la vista
        // $cursos = Curso::all();
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function show(Curso $curso)
    {
        // la funcion compact sirve para pasar la variable $curso
        return view('cursos.show', compact('curso'));
    }
}
