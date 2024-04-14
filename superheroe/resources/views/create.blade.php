{{-- resources/views/superheroes/create.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Add a New Superhero</h1>
    <form method="POST" action="{{ route('superheroes.store') }}">
        @csrf
        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" required>

        <label for="hero_name">Hero Name:</label>
        <input type="text" name="hero_name" id="hero_name" required>

        <label for="photo_url">Photo URL:</label>
        <input type="url" name="photo_url" id="photo_url" required>

        <label for="additional_info">Additional Info:</label>
        <textarea name="additional_info" id="additional_info"></textarea>

        <button type="submit">Save Superhero</button>
    </form>
@endsection