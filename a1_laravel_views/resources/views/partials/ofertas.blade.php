<h1>Ofertas</h1>

<div style="display: flex; gap: 1em; flex-wrap: wrap">

@foreach ($ofertas as $oferta)
    <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 300px;">
        <p>{{ $oferta['name'] }}</p> 
        <img src="{{ asset('image.jpg') }}" alt="image" style="width: 100px; height: 100px;">
        <p>${{ number_format($oferta['price'], 2) }}</p> 
        <a href="{{ url('/producto/' . $oferta['id']) }}" style="text-decoration: none; color: #007bff;">Ver detalles</a> 
    </div>
@endforeach

</div>
