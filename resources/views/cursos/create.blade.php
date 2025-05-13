@extends('layout.plantilla')

@section('title', 'Create')

@section('content')
    <h1 class="mb-8 text-amber-900 text-3xl">Página para crear nuevos cursos</h1>

    <div class="container w-11/12 max-w-screen-md m-auto">
        <form action="" method="POST" class="bg-gray-100 p-3">
            <label for="">
                Nombre: <br>
                <input type="text" class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            <br><br>

            <label for="">
                Descripción: <br>
                <textarea class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none"></textarea>
            </label>

            <br><br>

            <label for="">
                Categoría: <br>
                <input type="text" class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            <br><br>

            <button type="submit"
                class="block mx-auto bg-sky-500 hover:bg-cyan-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">
                Grabar Curso
            </button>
        </form>
    </div>

@endsection
