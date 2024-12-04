@include('header')

<h1>Movies</h1>
<a class="button" href="/movies/create">Create pelicula</a>
@if (session('success'))
    <p>{{ session('success') }}</p>
    
@endif

<ul>
    @foreach ($movies as $movie)
        <li>
            <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
            <a class="button" href="/movies/{{ $movie->id }}/edit">Editar</a>
            <form method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('DELETE')
                <label class="button" for="eliminar-{{ $loop->index }}">Eliminar</label>
                <input id="eliminar-{{ $loop->index }}" style="display: none" type="submit" value="Eliminar">
            </form>
        </li>
    @endforeach
</ul>
