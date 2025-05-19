@extends('layout.plantilla')

@section('title', 'Contáctanos')

@section('content')

    <h1 class="mb-8 text-amber-900 text-3xl text-center">Déjanos un mensaje</h1>

    <div class="container w11/12 max-w-screen-md m-auto">
        <form action="{{ route('contactanos.store') }}" method="POST">

            @csrf

            <label for="">
                Nombre
                <br>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            @error('name')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="">
                Correo
                <br>
                <input type="email" name="correo" value="{{ old('correo') }}"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">
            </label>

            @error('correo')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="">
                Mensaje
                <br>
                <textarea type="text" name="mensaje" rows="4"
                    class="p-2 rounded-md mt-1 w-full border border-2 border-lime-200 outline-none">{{ old('mensaje') }}</textarea>
            </label>

            @error('mensaje')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <button type="submit"
                class="block mx-auto mt-4 bg-sky-500 hover:bg-cyan-600 rounded-md ease-in-out duration-300 hover:underline text-white p-4">
                Enviar mensaje
            </button>

        </form>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif

@endsection
