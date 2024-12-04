@include('header')

<h1>Movie:edit</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/movies/{{ $movie->id}}">
    @csrf
    @method('PUT')
    <input name="title" placeholder="Titulo" value="{{ $movie->title}}">
    <input name="year" placeholder="Año" value="{{ $movie->year}}">
    <input name="genero" placeholder="genero" value="{{ $movie->genero}}">
    <input type="submit">
</form>