@extends('layout.plantilla')

@section('title', 'Create')

@section('content')
    <h1 class="mb-8 text-amber-900 text-3xl">Página para crear nuevos cursos</h1>

    <div class="container w-11/12 max-w-screen-md m-auto">
        <form action="{{ route('cursos.store') }}" method="POST" class="bg-gray-100 p-3">

            @csrf

            <label for="">
                Nombre: <br>
                <input type="text" value="{{ old('name') }}" name="name"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            @error('name')
                <!-- Lanza un mensaje de error si el campo obligatorio está vacío -->
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <br><br>

            <label for="">
                Descripción: <br>
                <textarea rows="5" name="description"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">{{ old('description') }}</textarea>
            </label>

            @error('description')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <br><br>

            <label for="">
                Categoría: <br>
                <input type="text" value="{{ old('categoria') }}" name="categoria"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            @error('categoria')
                <span class="text-red-500">{{ $message }}</span>
            @enderror

            <br><br>

            <button type="submit"
                class="block mx-auto bg-sky-500 hover:bg-cyan-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">
                Grabar Curso
            </button>
        </form>
    </div>

@endsection
