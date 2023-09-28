<?php

use Automovil as GlobalAutomovil;
use Transporte as GlobalTransporte;

 include 'includes/header.php';
interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color) {

    }

    public function getInfo() : string {
        return "El transporte AUTO tiene " . $this->ruedas . " ruedas y capacidad de " . $this->capacidad . " personas y tiene el color " . $this->color; 
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

echo "<pre>";
var_dump($transporte = new Transporte(8, 20));
var_dump($auto = new Automovil(4, 4, 'Rojo'));

echo $transporte->getInfo();
echo $auto->getInfo();
echo $auto->getRuedas();
include 'includes/footer.php';