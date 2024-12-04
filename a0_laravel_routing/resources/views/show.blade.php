<p>{{ $texto }}</p>
<a href='/comments/{{ $id }}/edit'>EDITAR </a>
<a href='/comments/{{ $id }}/delete'>ELIMINAR</a>
<form METHOD=POST action=/comments/{{$id}}>
    <input type=hidden name=_method value=DELETE />
    <input type=submit value=eliminar />
</form>

@include('partials.footer')
