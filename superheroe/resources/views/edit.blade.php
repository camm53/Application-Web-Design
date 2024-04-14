{{-- resources/views/superheroes/edit.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Edit Superhero</h1>
    <form method="POST" action="{{ route('superheroes.update', $superheroe->id) }}">
        @csrf
        @method('PUT')

        <label for="real_name">Real Name:</label>
        <input type="text" name="real_name" id="real_name" value="{{ $superheroe->real_name }}" required>

        <label for="hero_name">Hero Name:</label>
        <input type="text" name="hero_name" id="hero_name" value="{{ $superheroe->hero_name }}" required>

        <label for="photo_url">Photo URL:</label>
        <input type="url" name="photo_url" id="photo_url" value="{{ $superheroe->photo_url }}" required>

        <label for="additional_info">Additional Info:</label>
        <textarea name="additional_info" id="additional_info">{{ $superheroe->additional_info }}</textarea>

        <button type="submit">Update Superhero</button>
    </form>
@endsection