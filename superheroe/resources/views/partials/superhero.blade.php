<li>
    {{ $superhero->hero_name }} ({{ $superhero->real_name }})
    <a href="{{ route('superheroes.show', $superhero->id) }}">View</a>
    <a href="{{ route('superheroes.edit', $superhero->id) }}">Edit</a>
    <form action="{{ route('superheroes.destroy', $superhero->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</li>