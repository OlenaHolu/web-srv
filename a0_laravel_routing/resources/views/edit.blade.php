<form method='POST' action='/comments/{{ $cid }}'>
    <input type='hidden' name='_method' value='PATCH'>
    <input type='text' name='comment' value='{{ $ctext }}'>
    <input type='submit' value='Actualizar'>
</form>

@include('partials.footer')