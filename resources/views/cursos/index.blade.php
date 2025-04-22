@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Cursos</h1>
    <a href="{{ route('cursos.create') }}">Create course</a>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('cursos.show', $course->id) }}">{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>

    {{ $courses->links() }}
@endsection
