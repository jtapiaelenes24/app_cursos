<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    //

    public function index()
    {
        $cursos = Curso::orderby('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        // $curso = new Curso();

        // // Saneamos el código para evitar inyecciones sql
        // $curso->name = filter_var($request->name, FILTER_SANITIZE_STRING);
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        ### ASIGNACIÓN MASIVA ###
        $curso = Curso::create($request->all());


        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso)
    {
        // la funcion compact sirve para pasar la variable $curso
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso);
    }
}
