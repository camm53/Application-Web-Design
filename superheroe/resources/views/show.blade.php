{{-- resources/views/superheroes/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>{{ $superheroe->hero_name }}</h1>
    <p>Real Name: {{ $superheroe->real_name }}</p>
    <img src="{{ $superheroe->photo_url }}" alt="{{ $superheroe->hero_name }}" style="max-width: 200px;">
    <p>Additional Info: {{ $superheroe->additional_info }}</p>
    <a href="{{ route('superheroes.index') }}">Back to list</a>
@endsection