<?php 
declare( strict_types = 1);

include 'includes/header.php';
    // Definir una clase 
    class Producto {
        public function __construct(public string $nombre, public int $precio, public bool $disponible)
        {

        }

        public function mostrarMensaje() {
            echo "El producto es: " . $this->nombre . " y tiene un precio de: " . $this->precio;
        }
    }

    $producto = new Producto('Tablet', 2500, true);
    $producto->mostrarMensaje();
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";

    $producto2 = new Producto('Monitor Curvo', 4000, false);
    $producto2->mostrarMensaje();
    echo "<pre>";
    var_dump($producto2);
    echo "</pre>";


include 'includes/footer.php';