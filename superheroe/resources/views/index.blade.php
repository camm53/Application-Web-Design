{{-- resources/views/superheroes/index.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Superheroes List</h1>
    @includeWhen(session('superhero_created'), 'partials.notification', ['message' => 'Se a creado un nuevo superheroe :D'])

    <a href="{{ route('superheroes.create') }}">Add New Superhero</a>

    <ul>
        @each('partials.superhero', $superheroes, 'superhero')
    </ul>

    <script>
        var superheroes = @json($superheroes);
        console.log(superheroes);
    </script>
@endsection