@if ($superaray == null)
    <p>No hay comentarios</p>
@else
    <ul>
        @foreach ($superaray as $comment)
            <li><a href='/comments/{{ $loop->index }}'> {{ $comment }}</a></li>
        @endforeach

    </ul>
@endif
<a href=/comments/create>CREAR</a>

@include('partials.footer')
