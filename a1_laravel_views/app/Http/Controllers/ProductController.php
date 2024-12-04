<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product {
    public $name, $id, $price, $image_url;

    function __construct($name, $id, $price, $image_url) {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->image_url = $image_url;
    }
}

class ProductController extends Controller
{
    public $ofertas, $seleccion, $topventas;

    function init_variables()
    {
        $this->ofertas = [
            ["name" => "Smartphone Samsung Galaxy S21", "id" => 1, "price" => 799.99, "image_url" => "image.jpg"],
            ["name" => "Apple MacBook Air M1", "id" => 2, "price" => 999.99, "image_url" => "image.jpg"],
            ["name" => "Sony WH-1000XM4 Auriculares", "id" => 3, "price" => 349.99, "image_url" => "image.jpg"],
            ["name" => "Televisor LG OLED55CX", "id" => 4, "price" => 1299.99, "image_url" => "image.jpg"],
            ["name" => "Xbox Series X", "id" => 5, "price" => 499.99, "image_url" => "image.jpg"],
            ["name" => "PlayStation 5", "id" => 6, "price" => 499.99, "image_url" => "image.jpg"],
            ["name" => "Reloj Garmin Fenix 6", "id" => 7, "price" => 699.99, "image_url" => "image.jpg"],
            ["name" => "Aspiradora Dyson V11", "id" => 8, "price" => 599.99, "image_url" => "image.jpg"],
            ["name" => "Cámara Canon EOS R6", "id" => 9, "price" => 2499.99, "image_url" => "image.jpg"],
            ["name" => "Nintendo Switch OLED", "id" => 10, "price" => 349.99, "image_url" => "image.jpg"]
        ];

        $this->seleccion = json_decode('[
            { "name" : "Smartphone Samsung Galaxy S21", "id" : 11, "price": 799.99, "image_url": "image.jpg" },
            { "name" : "Apple MacBook Air M1", "id" : 12, "price": 999.99, "image_url": "image.jpg" },
            { "name" : "Auriculares Sony WH-1000XM4", "id" : 13, "price": 349.99, "image_url": "image.jpg" },
            { "name" : "Televisor LG OLED55CXPUA", "id" : 14, "price": 1399.99, "image_url": "image.jpg" },
            { "name" : "Reloj inteligente Fitbit Versa 3", "id" : 15, "price": 229.95, "image_url": "image.jpg" },
            { "name" : "Laptop Dell XPS 13", "id" : 16, "price": 1249.99, "image_url": "image.jpg" },
            { "name" : "Cámara Canon EOS Rebel T7", "id" : 17, "price": 499.99, "image_url": "image.jpg" },
            { "name" : "Smartwatch Garmin Forerunner 245", "id" : 18, "price": 299.99, "image_url": "image.jpg" }
        ]');

        $this->topventas = [
            new Product("Televisor LG OLED55CX", 4, 1299.99, "image.jpg"),
            new Product("Xbox Series X", 5, 499.99, "image.jpg"),
            new Product("Reloj Garmin Fenix 6", 7, 699.99, "image.jpg"),
            new Product("Cámara Canon EOS R6", 9, 2499.99, "image.jpg"),
            new Product("Nintendo Switch OLED", 10, 349.99, "image.jpg")
        ];
    }

    function ofertas()
    {
        $this->init_variables();
        return view('ofertas')->with('ofertas', $this->ofertas);
    }

    function seleccion(){
        $this->init_variables();
        return view('seleccion')->with('seleccion', $this->seleccion);
    }

    function topventas(){
        $this->init_variables();
        return view('topventas')->with('topventas', $this->topventas);
    }

    function product($productoid) {
        $this->init_variables();

        $product = null;

        // Se combinan todos los productos
        $allProducts = [
            'ofertas' => $this->ofertas,  // array asociativo
            'seleccion' => $this->seleccion, // objeto stdClass
            'topventas' => $this->topventas, // array de objetos Product
        ];

        // Recorre todos los productos
        foreach ($allProducts as $list) {
            // Si es un array asociativo (como ofertas)
            if (is_array($list)) {
                foreach ($list as $item) {
                    if (is_array($item) && isset($item['id']) && $item['id'] == $productoid) {
                        $product = $item; // Producto encontrado
                        break 2; // Sale de ambos bucles
                    }
                    // Si es un objeto Product (como topventas)
                    elseif (is_object($item) && $item->id == $productoid) {
                        $product = $item; // Producto encontrado
                        break 2; // Sale de ambos bucles
                    }
                }
            }
            // Si es un objeto stdClass (como seleccion)
            elseif (is_object($list)) {
                foreach ($list as $item) {
                    if (isset($item->id) && $item->id == $productoid) {  // Accede a las propiedades usando -> para stdClass
                        $product = (array) $item; // Convierte el objeto stdClass a array para facilitar su uso
                        break 2; // Sale de ambos bucles
                    }
                }
            }
        }

        // Si no se encontró el producto
        if ($product === null) {
            return redirect('/')->with('error', 'Producto no encontrado');
        }

        // Devuelve la vista con el producto encontrado
        return view('producto')->with('product', $product);
    }

    function index() {
        $this->init_variables();
        return view('all')
            ->with('ofertas', $this->ofertas)
            ->with('seleccion', $this->seleccion)
            ->with('topventas', $this->topventas);
    }
}
