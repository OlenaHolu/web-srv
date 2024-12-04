@include('partials.navbar')

<h1>Detalles del Producto</h1>

<div style="display: flex; gap: 1em; flex-wrap: wrap;">
    <div style="border: 1px solid #ccc; padding: 10px; border-radius: 5px; width: 300px;">
        <!-- Verificar si $product es un array o un objeto -->
        <h2>{{ is_array($product) ? $product['name'] : $product->name }}</h2>
        <img src="{{ asset('image.jpg') }}" alt="image" style="width: 100px; height: 100px;">
        
        <!-- Verificar si $product es un array o un objeto para acceder al precio -->
        <p><strong>Precio:</strong> ${{ is_array($product) ? number_format($product['price'], 2) : number_format($product->price, 2) }}</p>
        
        <!-- Verificar si $product es un array o un objeto para acceder al ID -->
        <p><strong>ID:</strong> {{ is_array($product) ? $product['id'] : $product->id }}</p>
    </div>
</div>

@include('partials.footer')
