<h1>Top ventas</h1>

<div style="display: flex; gap: 1em; flex-wrap: wrap">

@foreach ($topventas as $producto)
    <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 300px;">
        <p>{{ $producto->name }}</p> 
        <img src="{{ asset('image.jpg') }}" alt="image" style="width: 100px; height: 100px;">
        <p>${{ number_format($producto->price, 2) }}</p> 
        <a href="{{ url('/producto/' . $producto->id) }}" style="text-decoration: none; color: #007bff;">Ver detalles</a>
    </div>
@endforeach

</div>
