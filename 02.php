<?php 
declare( strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';
    // Definir una clase 
    class Producto {
        // Public - Se puede acceder y modificar en cualquier lugar (clase y objetos)
        // protected - Se pueden acceder / modificar unicamente en la clase 
        // private - solo miembros de la misma clase pueden acceder a el
        public $imagen;
        public static $imagenPlaceholder = "Imagen.jpg";


        public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen)
        {
            if($imagen) {
                self::$imagenPlaceholder = $imagen;
            }
        }

        public static function obtenerImagenProducto() {
            return self::$imagenPlaceholder;
        }

        public static function obtenerProducto() {
            echo "Obteniendo datos del Producto...";
        }

        public function mostrarMensaje() : void {
            echo "El producto es: " . $this->nombre . " y tiene un precio de: " . $this->precio;
        }

        public function getNombre() : string {
            return $this->nombre;
        }

        public function setNombre(string $nombre) {
            $this->nombre = $nombre;
        }
    }

    $producto = new Producto('Tablet', 2500, true, '');
    echo $producto->obtenerImagenProducto();
    // $producto->mostrarMensaje();
    $producto->setNombre("Otro Nombre");

    echo "<pre>";
    var_dump($producto);
    echo "</pre>";

    echo $producto->getNombre();
    
    $producto2 = new Producto('Monitor Curvo', 4000, false, 'MonitorCurvo.jpg');
    // $producto2->mostrarMensaje();
    echo $producto2->getNombre();
    echo $producto2->obtenerImagenProducto();

include 'includes/footer.php';