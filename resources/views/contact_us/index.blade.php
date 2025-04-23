@extends('layouts.plantilla')

@section('title', 'Contact Us')

@section('content')
    <h1>Leave us a message</h1>

    <form action="{{ route('contact_us.store') }}" method="POST">
        @csrf
        <label for="">
            Name:
            <br>
            <input type="text" name="name" id="" value="{{ old('name') }}">
        </label>
        <br>

        @error('name')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <label for="">
            Email:
            <br>
            <input type="email" name="email" id="" value="{{ old('email') }}">
        </label>
        <br>

        @error('email')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <label for="">
            Message:
            <br>
            <textarea name="message" id="" cols="20" rows="4">{{ old('message') }}</textarea>
        </label>
        <br>

        @error('message')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <br>
        <button type="submit">Send</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif
@endsection
