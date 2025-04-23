@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>Cursos create</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label for="">
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>

        @error('name')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label for="">
            Slug:
            <br>
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>

        @error('slug')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label for="">
            Description:
            <br>
            <textarea name="description" id="" cols="30" rows="5">{{ old('description') }}</textarea>
        </label>

        @error('description')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <label for="">
            Category:
            <br>
            <input type="text" name="category" value="{{ old('category') }}">
        </label>

        @error('category')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <button type="submit">Submit form</button>
    </form>
@endsection
