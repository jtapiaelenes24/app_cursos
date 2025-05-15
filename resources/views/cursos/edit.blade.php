@extends('layout.plantilla')

@section('title', 'Edit')

@section('content')
    <h1 class="mb-8 text-amber-900 text-3xl">Página para editar nuevos cursos</h1>

    <div class="container w-11/12 max-w-screen-md m-auto">
        <form action="{{ route('cursos.update', $curso) }}" method="POST" class="bg-gray-100 p-3">


            @csrf <!-- Sirve para crear un token por cada petición POST que realice un usuario -->
            @method('put') <!-- Sirve para especificar que utilizaremos el método PUT -->

            <label for="">
                Nombre: <br>
                <!-- el método old() sirve para devolver los valores de un campo de la bbdd -->
                <input type="text" name="name" value="{{ old('name', $curso->name) }}"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            <br><br>

            <label for="">
                Descripción: <br>
                <textarea rows="5" name="description"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">{{ old('description', $curso->description) }}</textarea>
            </label>

            <br><br>

            <label for="">
                Categoría: <br>
                <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            <br><br>

            <button type="submit"
                class="block mx-auto bg-sky-500 hover:bg-cyan-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">
                Actualizar Curso
            </button>
        </form>
    </div>

@endsection
