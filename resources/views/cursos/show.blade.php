@extends('layout.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <div class="container m-auto">
        <h1 class="my-5 text-amber-900 text-3xl">Bienvenidos a la página del curso
            <span class="text-blue-500">{{ $curso->name }}</span>
        </h1>

        <a href="{{ route('cursos.index') }}"
            class="text-gray-300 bg-slate-950 hover:bg-slate-700 ease-in duration-200 rounded p-2">
            Volver a Cursos
        </a>
        <a href="{{ route('cursos.edit', $curso) }}"
            class="ml-3 text-gray-300 bg-slate-950 hover:bg-slate-700 ease-in duration-200 rounded p-2">
            Editando Cursos
        </a>

        <p class="my-5 text-zinc-800 ">Descripción:<strong>{{ $curso->description }}</strong></p>
        <p class="text-zinc-800 text-lg">Categoría: <strong>{{ $curso->categoria }}</strong></p>
    </div>

@endsection
