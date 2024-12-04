@include('header')

<h1>Movies:show</h1>
<div>
    <p>{{ $movie->title }}</p>
    <p>{{ $movie->year}}</p>
    <p>{{ $movie->genero }}</p>
    <a href="/movies/{{ $movie->id }}/edit">Edit</a>
    <form method="POST" acction="/movies/{{ $movie->id }}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Eliminar"
    </form>
</div>