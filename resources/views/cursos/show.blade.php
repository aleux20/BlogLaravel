@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Return</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Edit course</a>
    <p><strong>Category: </strong>{{ $curso->category }}</p>
    <p><strong>Description: </strong>{{ $curso->description }}</p>

    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
