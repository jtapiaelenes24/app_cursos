@extends('layout.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Bienvenidos a la página del curso {{ $curso }}</h1>
@endsection
