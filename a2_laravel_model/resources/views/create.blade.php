@include('header')

<h1>Crear pelicula</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="error">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/movies">
    @csrf
    <input name="title" placeholder="Titulo">
    <input name="year" placeholder="Año">
    <input name="genero" placeholder="Genero">
    <label class="button" for="crear">Crear</label>
    <input id="crear" type="submit" style="display: none" value="Crear">
</form>