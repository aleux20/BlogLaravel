@extends('layouts.plantilla')

@section('title', 'Edit course')

@section('content')
    <h1>Edit Course</h1>

    <form action="{{ route('cursos.update', $course) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">
            Name:
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
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
            <input type="text" name="slug" value="{{ old('slug', $course->slug) }}">
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
            <textarea name="description" id="" cols="30" rows="5">{{ old('description', $course->description) }}</textarea>
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
            <input type="text" name="category" value="{{ old('category', $course->category) }}">
        </label>

        @error('category')
            <br>
            <span>*{{ $message }}</span>
            <br>
        @enderror

        <br>
        <button type="submit">Update form</button>
    </form>
@endsection
